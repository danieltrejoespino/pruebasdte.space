  //   fetch('//www.tarjetavolaris-invex.com.mx/scripts/contacto.php', options)
//   fetch('http://www.tarjetavolaris-invex.com.mx/scripts/contacto.php', {
//   fetch('https://pruebasdte.space/GitHub/connection.php', {
//     method: 'POST',
//     headers: {
//         'Content-Type': 'application/json'
//     },
//     body: JSON.stringify({
//       nombre: 'pruebaas',
//       apellidos: 'prueba',
//       telefono: 'prueba',
//       mail: 'prueba@prueba.com',
//       horario: '1'
//     })
// }) 
//   .then(response => {
//       console.log(`Envio exitoso---- ${response}`);
//   })
//   .catch(error => {
//       console.log('EROR----'+error);
//   });


const datos = new FormData();
		datos.append('nombre', 's');
		datos.append('apellidos', 'Pérez');
		datos.append('telefono', 1234567890);
		datos.append('mail', 'prueba@prueba.com');
		datos.append('horario', 1);

fetch('https://pruebasdte.space/GitHub/contacto.php', {
    method: 'POST',
    body: datos
}) 
  .then(response => {
      console.log(`Envio exitoso---- ${response}`);
  })
  .catch(error => {
      console.log('EROR----'+error);
  });

  

   
  fetch('https://pruebasdte.space/GitHub/consulta.php')
  .then(response => response.json())
  .then(data => {
    // Aquí puedes trabajar con los datos del JSON
    console.log(data);
  });






