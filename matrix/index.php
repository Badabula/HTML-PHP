<!doctype html>
<html lang="en">

<head>
  <title>matrix calculator</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <div class="container"><!-- Nav tabs -->
    <ul class="nav nav-tabs" id="navId" role="tablist">
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">sum</a>
        </li>
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">multiply</a>
        </li>
        <li class="nav-item">
            <a href="#tab1Id" class="nav-link active" data-bs-toggle="tab" aria-current="page">substract</a>
        </li>
    </ul>
    
    <!-- Tab panes -->
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab2Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab3Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab4Id" role="tabpanel"></div>
        <div class="tab-pane fade" id="tab5Id" role="tabpanel"></div>
    </div>
    
    </div>
  </header>
  <main>
  <div class="container">
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="form-group">
                    <label for="columns">Number of Columns:</label>
                    <input type="number" class="form-control" id="columns" placeholder="Enter number of columns">
                </div>
                <div class="form-group">
                    <label for="rows">Number of Rows:</label>
                    <input type="number" class="form-control" id="rows" placeholder="Enter number of rows">
                </div>
                <button type="button" class="btn btn-primary" onclick="createGrid()">Create Grid</button>
            </form>
        </div>
    </div>
    <br>
    <div class="row" id="grid">
    </div>
</div>

<script>
    function createGrid() {
        var columns = document.getElementById("columns").value;
        var rows = document.getElementById("rows").value;
        var grid = document.getElementById("grid");

        grid.innerHTML = "";

        for (var i = 0; i < rows; i++) {
            var row = document.createElement("div");
            row.classList.add("row");
            for (var j = 0; j < columns; j++) {
                var col = document.createElement("div");
                col.classList.add("col-md-3");
                col.innerHTML = "<textarea class='form-control'></textarea>";
                row.appendChild(col);
            }
            grid.appendChild(row);
        }
    }
</script>

  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>