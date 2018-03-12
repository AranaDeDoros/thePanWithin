  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {


                        cardnumber: {
              identifier  : 'cardnumber',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid card number.'
                },
                {
                 type: 'regExp[/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/]',
                  prompt : 'Check the card number format.XXXX-XXXX-XXXX-XXXX. Only digits.'
                }
              ]
            },                       
                        year: {
              identifier  : 'yearz',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a year.'
                },
                {
                  type: 'regExp[/^201{1}[7]{1}$|^20[1-9]{1}[0-9]{1}$/]',
                  prompt : 'Enter a valid year YYYYY. 2017, or greater. Less or equal than 2099.'
                }
              ]
            },                        

                     month: {
              identifier  : 'month',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please select a month.'
                }
              ]
            },                        

                     code: {
              identifier  : 'code',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your code'
                },
                {
                 type: 'regExp[/^[0-9]{4}$/]',
                  prompt : 'Code must be 4 digits long.'
                }
              ]
            }
          }
        })
      ;
    })
  ;
