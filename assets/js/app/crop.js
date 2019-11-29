export const crop = function (){
    // const imgUrl = $('input[name=post-img]');
    //     console.log(imgUrl);
    //     console.log("hallo");

        const fileInput = document.getElementById("file");
        const imgInput = document.querySelector("input[name=image]");
        const cropperContainer = document.getElementById("cropper");
        const cropResult = document.querySelector("#crop-result>img");

        let croppie = new Croppie(cropperContainer, {
            url: "../img/brownies.js",
            viewport: { width: 250, height: 250 },
            boundary: { width: 300, height: 300 },
            showZoomer: true,
            enableOrientation: true,
            enableExif: true
        });
        croppie.bind({
            zoom: 0
        });

        cropperContainer.addEventListener('update', function() {
            croppie.result('base64').then(function(blob) {
                cropResult.setAttribute("src", blob);
                imgInput.value = blob;
            });
        });

        fileInput.addEventListener("change", function() {
            let reader = new FileReader();
            reader.onload = function() {
                croppie.bind({
                    url: this.result,
                    zoom: 0
                });
            };
            reader.readAsDataURL(this.files[0]);
        });

}