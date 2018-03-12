  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
              username: {
              identifier  : 'username',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter an username'
                },
                {
               type: 'regExp[/^[a-zA-Z0-9_-]{6,12}$/]',
                prompt: 'Enter a valid username. Min 6 characters, max 12. Alphanumeric'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter a valid password. 6 characters minimum, 12 max.'
                },
                {
                 type: 'regExp[/^[a-zA-Z0-9_-]{6,12}$/]',
                  prompt : 'Your password must be at least 6 characters, max 12 characters. Alphanumeric.'
                }
              ]
            }
          }
        })
      ;
    })
  ;