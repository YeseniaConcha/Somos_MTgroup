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