  //   fetch('//www.tarjetavolaris-invex.com.mx/scripts/contacto.php', options)
//   fetch('http://www.tarjetavolaris-invex.com.mx/scripts/contacto.php', {
  fetch('https://pruebasdte.space/GitHub/connection.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      nombre: 'pruebaas',
      apellidos: 'prueba',
      telefono: 'prueba',
      mail: 'prueba@prueba.com',
      horario: '1'
    })
}) 
  .then(response => {
      console.log(`Envio exitoso---- ${response}`);
  })
  .catch(error => {
      console.log('EROR----'+error);
  });