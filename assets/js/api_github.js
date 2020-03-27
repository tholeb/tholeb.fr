  var request_github = new XMLHttpRequest();
  request_github.open('GET','https://api.github.com/users/tholeb/repos' ,true)

  var request_codetabs = new XMLHttpRequest();
  request_codetabs.open('GET','https://api.codetabs.com/v1/loc?github=tholeb/tholeb.fr' ,true)
  request_codetabs.onload = function() {
      var data = JSON.parse(this.response);
      var last_item = data[data.length-1];
      $('.total_files').html(last_item.files);
      $('.total_lines').html(last_item.linesOfCode);
      $('.type_lang').html(data.length);
  }

  request_github.onload = function() {
      var data = JSON.parse(this.response);
      //console.log(data);
      var statusHTML = '';
      $.each(data, function(i, status){
          statusHTML += ' \
          <div class="col s12 m4 l4">  \
            <div class="card grey darken-7"> \
              <div class="card-content white-text"> \
                <span class="card-title grey-text">' + status.name +  '</span> \
                <p>' + status.description +  '</p> \
                <p><i class="fas fa-certificate"></i> License: ' + status.license.name +  '</p> \
              </div> \
              <div class="card-action">\
                <a href="' + status.html_url +  '" class="waves-effect waves-grey waves-light btn-flat btn-small"><i class="fas fa-link"></i></a> \
                <a href="#" class="waves-effect waves-grey waves-light btn-flat btn-small"><i class="fas fa-star"></i> ' + status.stargazers_count +  '</a> \
                <a href="#" class="waves-effect waves-grey waves-light btn-flat btn-small"><i class="fas fa-code-branch"></i> ' + status.forks_count + '</a> \
                <a href="#" class="waves-effect waves-grey waves-light btn-flat btn-small"><i class="fas fa-eye"></i> ' + status.watchers + '</a> \
              </div> \
            </div> \
          </div>';
      });
      $('.repositories').html(statusHTML);
      $('.repositories_count').html(data.length);
  }
  request_github.send();
  request_codetabs.send();
