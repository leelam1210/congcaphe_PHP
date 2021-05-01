$(document).ready(function () {

    $("#form-new-product").validate({
        ignore: [],
        rules: {
            name: {
                required: true
            },
            price: {
                required: true,
                number: true
            },
            image: {
                required: true,
                extension: "png|jpg|jpeg"
            },
            content: {
                required: true,
                minlength: 10
            }
        },
    });
    $("#form-update-product").validate({
        ignore: [],
        rules: {
            name: {
                required: true
            },
            price: {
                required: true,
                number: true
            },
            thumbnail: {
                extension: "png|jpg|jpeg"
            },
            description: {
                required: true,
                minlength: 10
            }
        },
    });
    $("#form-new-post").validate({
        ignore: [],
        rules: {
            content_post: {
                required: function(textarea) {
                    CKEDITOR.instances[textarea.id].updateElement(); // update textarea
                    var editorcontent = textarea.value.replace(/<[^>]*>/gi, ''); // strip tags
                    return editorcontent.length === 0;
                },
                minlength: 10
            },
            title: {
                required: true,
            },
            description: {
                required: true
            },
            thumbnail: {
                extension: "png|jpg|jpeg",
                required: true
            },
        },
    });
    $("#form-update-post").validate({
        ignore: [],
        rules: {
            content_post: {
                required: function(textarea) {
                    CKEDITOR.instances[textarea.id].updateElement(); // update textarea
                    var editorcontent = textarea.value.replace(/<[^>]*>/gi, ''); // strip tags
                    return editorcontent.length === 0;
                },
                minlength: 10
            },
            title: {
                required: true,
            },
            description: {
                required: true
            },
            thumbnail: {
                extension: "png|jpg|jpeg",
                required: false
            },
        },
    });
    $("#form-add").validate({
        ignore: [],
        rules: {
            location: {
                required: true,
            },
            transport: {
                required: true,
            }
        }
    });

    $("#form-update-recruitment").validate({
        rules: {
            location: {
                required: true
            },
            title: {
                required: true,
            },
            content:{
                required: true,
            }
        }
    });
    $("#form-new-recruitment").validate({
        rules: {
            location: {
                required: true
            },
            title: {
                required: true,
            },
            content:{
                required: true,
            }
        }
    });
})