const form = document.getElementById("formulario");
const inputs = document.querySelectorAll("input");
const nombreProveA = document.getElementById('nombreProve');
const direccionProveB = document.getElementById('direccionProve');
const telefonoProveC = document.getElementById('telefonoProve');

const nitProveD = document.getElementById('nitProve');

const correoProveE = document.getElementById('correoProve');

const productoProveF = document.getElementById('productoProve');

const descripcionProveG = document.getElementById('descripcionProve');

const infoNom = document.getElementById('Nom_pro')
const infoDir = document.getElementById('Dir_pro')
const infoTel = document.getElementById('Tel_pro')
const infoNit = document.getElementById('Nit_pro')
const infoCorr = document.getElementById('Corr_pro')
const infoProd = document.getElementById('Prod_pro')
const infoDesc = document.getElementById('Desc_pro')

let id = /^[0-9_-]{3,8}$/
let tel = /^[0-9_-]{1,10}$/
let nombre = /^[A-ZÑa-zñáéíóúÁÉÍÓÚ'° ]+$/
let descrip = /^[ a-zA-ZñÑáéíóúÁÉÍÓÚ]+$/
let numeros = /^-?\d+\.?\d*$/m
let correo = /^([\w\.\-_]+)?\w+@[\w-_]+(\.\w+){1,}$/igm



function validacionFormulario(e) {
  e.preventDefault();
  switch (e.target.name) {
    case "nombreProve":
      if (nombre.test(e.target.value)) {
        infoNom.textContent = '';
        nombreProveA.classList.add('correcto')
        nombreProveA.classList.remove('incorrecto')
      } else {
        infoNom.textContent = 'Escribe un nombre valido';
        nombreProveA.classList.remove('correcto')
        nombreProveA.classList.add('incorrecto')
      }
      break;
      case "direccionProve":
        if (descrip.test(e.target.value)) {
          infoDir.textContent = '';
          direccionProveB.classList.add('correcto')
          direccionProveB.classList.remove('incorrecto')
        } else {
          infoDir.textContent = 'Escriba una dirección Correcta';
          direccionProveB.classList.remove('correcto')
          direccionProveB.classList.add('incorrecto')
        }
        break;
        case "telefonoProve":
          if (tel.test(e.target.value)) {
            Tel_pro.textContent = '';
            telefonoProveC.classList.add('correcto')
            telefonoProveC.classList.remove('incorrecto')
          } else {
            Tel_pro.textContent = 'Escribe un numero telefono correcto';
            telefonoProveC.classList.remove('correcto')
            telefonoProveC.classList.add('incorrecto')
          }
          break;
          case "nitProve":
            if (id.test(e.target.value)) {
              infoNit.textContent = '';
              nitProveD.classList.add('correcto')
              nitProveD.classList.remove('incorrecto')
            } else {
              infoNit.textContent = 'El Nit no es correcto';
              nitProveD.classList.remove('correcto')
              nitProveD.classList.add('incorrecto')
            }
            break;
            case "correoProve":
              if (correo.test(e.target.value)) {
                infoCorr.textContent = '';
                correoProveE.classList.add('correcto')
                correoProveE.classList.remove('incorrecto')
              } else {
                infoCorr.textContent = 'Escribe un Email valido';
                correoProveE.classList.remove('correcto')
                correoProveE.classList.add('incorrecto')
              }
              break;
              case "productoProve":
                if (descrip.test(e.target.value)) {
                  infoProd.textContent = '';
                  productoProveF.classList.add('correcto')
                  productoProveF.classList.remove('incorrecto')
                } else {
                  infoProd.textContent = 'Digite los productos validos';
                  productoProveF.classList.remove('correcto')
                  productoProveF.classList.add('incorrecto')
                }
                break;
                case "descripcionProve":
                  if (descrip.test(e.target.value)) {
                    infoDesc.textContent = '';
                    descripcionProveG.classList.add('correcto')
                    descripcionProveG.classList.remove('incorrecto')
                  } else {
                    infoDesc.textContent = 'Digite una descripcion valida';
                    descripcionProveG.classList.remove('correcto')
                    descripcionProveG.classList.add('incorrecto')
                  }
                  break;




  }
}

inputs.forEach((input) => {
  input.addEventListener("keyup", validacionFormulario);
});
