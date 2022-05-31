fetch("../controlador/ControladorVisualizar.php")
    .then((datos) => datos.json())
    .then((datos) => {
        const template = document.getElementById("template").content;
        const fragmentPercusion = document.createDocumentFragment();
        const fragmentVoz = document.createDocumentFragment();
        const fragmentCuerda = document.createDocumentFragment();
        const fragmentViento = document.createDocumentFragment();
        const videosVoz = document.getElementById("videosVoz");
        const videosCuerdaos = document.getElementById("videosCuerda");
        const videosPercusion = document.getElementById("videosPercusion");
        const videosViento = document.getElementById("videosViento");

        datos.forEach((dato) => {
            const clon = template.cloneNode(true);
            clon.getElementById("iframe").src = dato.url_video;
            clon.getElementById("nombre").textContent = dato.nombre_video;
            clon.getElementById("categoria").textContent = dato.categoria;
            let btn = clon.getElementById("eliminar");
            btn.setAttribute("onclick", "eliminar('" + dato.id_videos + "')");
            let btnEditar = clon.getElementById("editar");
            btnEditar.setAttribute("onclick", "editar('" + dato.id_videos + "')");

            if (dato.categoria == "cuerda") {
                fragmentCuerda.appendChild(clon)
            }
            if (dato.categoria == "voz") { fragmentVoz.appendChild(clon) }
            if (dato.categoria == "viento") { fragmentViento.appendChild(clon) }
            if (dato.categoria == "percusion") { fragmentPercusion.appendChild(clon) }
        });
        videosVoz.appendChild(fragmentVoz)
        videosCuerdaos.appendChild(fragmentCuerda)
        videosPercusion.appendChild(fragmentPercusion)
        videosViento.appendChild(fragmentViento)
    });

function eliminar(id) {
    const inputEnvia = document.getElementById("inputEnvia");

    inputEnvia.value = id;
    const btnEliminar = document.getElementById("btn");
    btnEliminar.click();
}

function editar(id) {
    const inputIdVideo = document.getElementById("idVideo");
    const btnEnvio = document.getElementById("btnEnvia");
    const inputNombre = document.getElementById("nombreVideo");
    const inputUrl = document.getElementById("urlVideo");
    const inputCategoria = document.getElementById("categoriaVideo");
    fetch("../controlador/ControladorVisualizar.php")
        .then((datos) => datos.json())
        .then((datos) => {
            const template = document.getElementById("template").content;
            const fragment = document.createDocumentFragment();
            const videos = document.getElementById("videos");

            datos.forEach((dato) => {
                if (dato.id_videos == id) {
                    inputNombre.value = dato.nombre_video;
                    inputCategoria.value = dato.categoria;
                    inputUrl.value = dato.url_video;
                }
            });
        });
    inputIdVideo.value = id;
    btnEnvio.click();
}