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
                prompt: 'Enter a valid username. Min 6 characters, max 12. Alphanumeric. Have in mind that accented characters not supported.'
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
                  prompt : 'Your password must be at least 6 characters, max 12 characters. Alphanumeric.'
                }
              ]
            },
                        
                        password2: {
              identifier  : 'password2',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please confirm your password'
                },
                {
                 type: 'match[password]',
                  prompt : 'Password does not match'
                }
              ]
            },

                        cellphone: {
              identifier  : 'cellphone',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid cellphone number. (10 digits long).'
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
            },                       
                        year: {
              identifier  : 'yearz',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a year.'
                },
                {//type: 'regExp[/^19{1}[0-9]{2}$|^20{1}[0-9]{2}$/]',
                 type: 'regExp[/^201{1}[7]{1}$|^20[1-9]{1}[0-9]{1}$/]',
                  prompt : 'Enter a valid year YYYYY. 2017, or greater. Less or equal than 2099.'
                }
              ]
            },                        

                     month: {
              identifier  : 'mes',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please select a month.'
                }
              ]
            }
          }
        })
      ;
    })
  ;
