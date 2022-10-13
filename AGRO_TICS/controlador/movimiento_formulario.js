const movPag = document.querySelector(".movPag");
const btn_adelante2 = document.querySelector(".sigPag");
const btn_atras1 = document.querySelector(".volver-pag1");
const btn_adelante3 = document.querySelector(".adelante-pag3");
const btn_atras2 = document.querySelector(".volver-pag2");
const btn_adelante4 = document.querySelector(".adelante-pag4");
const btn_atras3 = document.querySelector(".volver-pag3");
const btn_adelante5 = document.querySelector(".adelante-pag5");
const btn_atras4 = document.querySelector(".volver-pag4");
/** Adelante */
btn_adelante2.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-25%"
});

btn_adelante3.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-50%"
});

btn_adelante4.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-75%"
});

btn_adelante5.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-100%"
});

/** Atras */

btn_atras1.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "0%"
});

btn_atras2.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-25%"
});

btn_atras3.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-50%"
});


btn_atras4.addEventListener("click", function(e)
{
    e.preventDefault();

    movPag.style.marginLeft = "-75%"
});


