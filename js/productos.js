const form = document.getElementById("formulario");
    const inputs = document.querySelectorAll("input");
    const refeProductoA = document.getElementById('referenciaProducto')
    const nombreProductoB = document.getElementById('nombreProducto')
    const precioProductoC = document.getElementById('precioProducto')
    const cantidadProductoD = document.getElementById('cantidadProducto')
    

    const infoRef = document.getElementById('Ref_pro')
    const infoNom = document.getElementById('Nom_pro')
    const infoPre = document.getElementById('Precio_Pro')
    const infoCan = document.getElementById('Can_Pro')
   

    let id = /^[0-9_-]{3,10}$/
    let nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
    let numeros = /^-?\d+\.?\d*$/m
    


    function validacionFormulario(e) {
      e.preventDefault();
      switch (e.target.name) {
        case "referenciaProducto":
          if (id.test(e.target.value)) {
            infoRef.textContent = '';
            refeProductoA.classList.add('correcto')
            refeProductoA.classList.remove('incorrecto')
          } else {
            infoRef.textContent = 'Solo se permite numeros entre 3 a 10 digitos';
            refeProductoA.classList.remove('correcto')
            refeProductoA.classList.add('incorrecto')
          }
          break;
          case "nombreProducto":
            if (nombre.test(e.target.value)) {
              infoNom.textContent = '';
              nombreProductoB.classList.add('correcto')
              nombreProductoB.classList.remove('incorrecto')
            } else {
              infoNom.textContent = 'Solo se permite texto';
              nombreProductoB.classList.remove('correcto')
              nombreProductoB.classList.add('incorrecto')
            }
            break;
            case "precioProducto":
              if (numeros.test(e.target.value)) {
                infoPre.textContent = '';
                precioProductoC.classList.add('correcto')
                precioProductoC.classList.remove('incorrecto')
              } else {
                infoPre.textContent = 'Solo se permite numeros';
                precioProductoC.classList.remove('correcto')
                precioProductoC.classList.add('incorrecto')
              }
              break;
              case "cantidadProducto":
                if (numeros.test(e.target.value)) {
                  infoCan.textContent = '';
                  cantidadProductoD.classList.add('correcto')
                  cantidadProductoD.classList.remove('incorrecto')
                } else {
                  infoCan.textContent = 'Solo se permiten numeros';
                  cantidadProductoD.classList.remove('correcto')
                  cantidadProductoD.classList.add('incorrecto')
                }
                break;
               

      }
    }

    inputs.forEach((input) => {
      input.addEventListener("keyup", validacionFormulario);
    });
 