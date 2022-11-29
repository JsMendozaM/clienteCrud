    const form = document.getElementById("formulario");
    const inputs = document.querySelectorAll("input");
    const idClientesA = document.getElementById('idClientes');
    const nombreClienteB = document.getElementById('nombreCliente');
    const correoClienteC = document.getElementById('correoCliente');
    const direccionClienteD = document.getElementById('direccionCliente');
    const teleClienteE = document.getElementById('teleCliente');

    const infoId = document.getElementById('Cli')
    const infoNombre = document.getElementById('NomCli')
    const infoCorreo = document.getElementById('CorrCli')
    const infoDirre = document.getElementById('DirCli')
    const infoTel = document.getElementById('TelCli')

    let id = /^[0-9_-]{3,10}$/
    let nombre = /^[a-zA-ZÀ-ÿ\s]{1,40}$/
    let numeros = /^-?\d+\.?\d*$/m
    let correo = /^([\w\.\-_]+)?\w+@[\w-_]+(\.\w+){1,}$/igm
    let direccion = /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/


    function validacionFormulario(e) {
      e.preventDefault();
      switch (e.target.name) {
        case "idClientes":
          if (id.test(e.target.value)) {
            infoId.textContent = '';
            idClientesA.classList.add('correcto')
            idClientesA.classList.remove('incorrecto')
          } else {
            infoId.textContent = 'Solo se permite numeros entre 3 a 10 digitos';
            idClientesA.classList.remove('correcto')
            idClientesA.classList.add('incorrecto')
          }
          break;
          case "nombreCliente":
            if (nombre.test(e.target.value)) {
              infoNombre.textContent = '';
              nombreClienteB.classList.add('correcto')
              nombreClienteB.classList.remove('incorrecto')
            } else {
              infoNombre.textContent = 'Solo se permite texto';
              nombreClienteB.classList.remove('correcto')
              nombreClienteB.classList.add('incorrecto')
            }
            break;
            case "correoCliente":
              if (correo.test(e.target.value)) {
                infoCorreo.textContent = '';
                correoClienteC.classList.add('correcto')
                correoClienteC.classList.remove('incorrecto')
              } else {
                infoCorreo.textContent = 'Solo se permite Correo electronico';
                correoClienteC.classList.remove('correcto')
                correoClienteC.classList.add('incorrecto')
              }
              break;
              case "direccionCliente":
                if (direccion.test(e.target.value)) {
                  infoDirre.textContent = '';
                  direccionClienteD.classList.add('correcto')
                  direccionClienteD.classList.remove('incorrecto')
                } else {
                  infoDirre.textContent = 'Escribe una dirección correcta';
                  direccionClienteD.classList.remove('correcto')
                  direccionClienteD.classList.add('incorrecto')
                }
                break;
                case "teleCliente":
                  if (numeros.test(e.target.value)) {
                    infoTel.textContent = '';
                    teleClienteE.classList.add('correcto')
                    teleClienteE.classList.remove('incorrecto')
                  } else {
                    infoTel.textContent = 'Escribe un telefono valido';
                    teleClienteE.classList.remove('correcto')
                    teleClienteE.classList.add('incorrecto')
                  }
                  break;
  



      }
    }

    inputs.forEach((input) => {
      input.addEventListener("keyup", validacionFormulario);
    });
 