document.addEventListener('trix-file-accept', function (e) {
    e, preventDefault()
})


const imageInput = document.querySelector('#cover');
const imgPreview = document.querySelector('.img-preview');
function previewImage(edit = '') {
    
    const image = imageInput.files[0];
    const reader = new FileReader();
    reader.onload = function () {
        
        let dataURL = reader.result;
        imgPreview.src = dataURL

        // Callback function
        imgPreview.onload = function () {
            imgPreview.style.display = 'block';
        }
        imgPreview.onerror = function () {
            imgPreview.style.display = 'none'
        }
    }

    if(imageInput.value == '' && edit != '') {
        imgPreview.style.display = 'block'
        imgPreview.src = `../../../img/novel/${edit}`
    }
    else if(imageInput.value == '') {
        imgPreview.style.display = 'none';
    } else {
        reader.readAsDataURL(image);
    }
}

function resetClick(edit = '') {
    if(edit != '') {
        imgPreview.style.display = 'block';
        imgPreview.src = `../../../img/novel/${edit}`
    } else {
        imgPreview.style.display = 'none';

    }
}