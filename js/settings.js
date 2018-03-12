  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'email',
                  prompt : 'Please enter a valid e-mail'
                }
              ]
            }, username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter an username'
                },
                {
               type: 'regExp[/^[a-zA-Z0-9_-]{6,12}$/]',
                prompt: 'Enter a valid username. Min 6 characters, max 12.  Alphanumeric'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid password. 6 characters minimum, 12 at max.'
                },
                {
                 type: 'regExp[/^[a-zA-Z0-9_-]{6,12}$/]',
                  prompt : 'Your password must be at least 6 characters, max 12 characters. Alphanumeric'
                }
              ]
            },
              
                        cellphone: {
              identifier  : 'cellphone',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid cellphone number. 10 digits long.'
                },
                {
                 type: 'regExp[/^[0-9]{10}$/]',
                  prompt : 'Your cellphone number must be 10 numbers long..and contain only numbers.'
                }
              ]
            },
                       cardnumber: {
              identifier  : 'cardnumber',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid card number.'
                },
                {
                 type: 'regExp[/^[0-9]{4}-[0-9]{4}-[0-9]{4}-[0-9]{4}$/]',
                  prompt : 'Check the card number format. XXXX-XXXX-XXXX-XXXX. Only digits.'
                }
              ]
            }
          }
        })
      ;
    })
  ;
