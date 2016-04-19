<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
  <!-- códigos para modal-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  
  <script>   
  $(document).ready(function() {
   $('#myModal').modal('show');
  });   
  </script>
  
   
  <style>
  .modal-header, h4, .close {
      background-color: #DDD;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #DDD;
  }  
  
  </style>
  
    <!-- FIM códigos para modal-->
</head>

<html>

 <!-- Modal -->
<div class="container">
  

 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal conteúdo-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          
          <h4><img src="logo.png"</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
		    
                    <h3 align="justify"> Clique no botão abaixo para realizar o cadastro da pré-matrícula. 
					<strong><br><br>Atenção:</strong> O cadastro não garante a vaga.</h3>
                    <br>
                    <br>
					
                    <button type="button" class="btn btn-danger btn-block" data-dismiss="modal">CADASTRAMENTO DE PRÉ-MATRÍCULA</button>
              
          </form>
        </div>
        <div class="modal-footer">
          
        </div>
      </div>
      
    </div>
  </div> 
</div>
  <!-- FIM Modal conteúdo-->
</html>
