  //   fetch('//www.tarjetavolaris-invex.com.mx/scripts/contacto.php', options)
  fetch('http://www.tarjetavolaris-invex.com.mx/scripts/contacto.php', {
    method: 'POST',
    
    body: JSON.stringify({
      nombre: 'prueba',
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