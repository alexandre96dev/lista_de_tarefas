<!DOCTYPE html>
<html>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="/tarefas" class="w3-bar-item w3-button">Adicionar Tarefas</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  @yield('teste')
</div>

<div class="w3-container">
    @yield('content')
</div>

</div>
      
</body>
</html>