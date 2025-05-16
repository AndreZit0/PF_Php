<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Asignacion de instructor</h1>
                </div>
            

        

            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                    </div>

                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead> 
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th>
                                    <th>Documento</th>
                                    <th>ficha</th>
                                    <th>Programas</th>
                                    <th>Evaluador</th>
                                    <th>Asignar</th>



                                    
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
        <td>001</td>
        <td>Jonathan Alvarez Aguirre</td>
        <td>1117014669</td>
        <td>2823094</td>
        <td>Análisis y Desarrollo de Software</td>
        <td>Juan Pablo Pinillos Reina</td>
        <td><button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modalAgregarPrograma">Asignar</button></td>
    </tr>
    <tr>
        <td>002</td>
        <td>María Fernanda López</td>
        <td>1117023456</td>
        <td>2823100</td>
        <td>Gestión Administrativa</td>
        <td>Laura Gómez Pérez</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>003</td>
        <td>Carlos Andrés Martínez</td>
        <td>1117037890</td>
        <td>2823111</td>
        <td>Contabilidad y Finanzas</td>
        <td>Andrés Felipe Torres</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>004</td>
        <td>Luisa Fernanda Ramírez</td>
        <td>1117045678</td>
        <td>2823122</td>
        <td>Gestión del Talento Humano</td>
        <td>Camila Rodríguez Díaz</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>005</td>
        <td>Jorge Luis Pérez</td>
        <td>1117051234</td>
        <td>2823133</td>
        <td>Diseño e Integración de Multimedia</td>
        <td>Diego Alejandro Vargas</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>006</td>
        <td>Andrea Carolina Sánchez</td>
        <td>1117069876</td>
        <td>2823144</td>
        <td>Desarrollo de Videojuegos</td>
        <td>Paola Andrea Ríos</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>007</td>
        <td>Felipe Antonio Gómez</td>
        <td>1117076543</td>
        <td>2823155</td>
        <td>Producción Multimedia</td>
        <td>Ricardo Esteban Morales</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>008</td>
        <td>Daniela Sofía Torres</td>
        <td>1117084321</td>
        <td>2823166</td>
        <td>Mecánica Industrial</td>
        <td>Valentina Ruiz Ortega</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>009</td>
        <td>Juan Sebastián Herrera</td>
        <td>1117098765</td>
        <td>2823177</td>
        <td>Gestión de Redes de Datos</td>
        <td>Manuel Antonio Castro</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
    <tr>
        <td>010</td>
        <td>Sofía Alejandra Ramírez</td>
        <td>1117105432</td>
        <td>2823188</td>
        <td>Instalaciones Eléctricas</td>
        <td>Gabriel Eduardo Mendoza</td>
        <td><button class="btn btn-success btn-sm">Asignar</button></td>
    </tr>
                                <!-- 
                                <?php for ($i = 1; $i <= 50; $i++): ?>
                                    <tr>
                                        <td><?php echo "SENA-" . str_pad($i, 3, "0", STR_PAD_LEFT); ?></td>
                                        <td><?php echo "Programa de Formación " . $i; ?></td>
                                        <td><?php echo ($i % 2 == 0) ? "Activo" : "Inactivo"; ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endfor; ?> -->



                            </tbody>
                        </table>
                    </div>






                </div>
            </div>
        </div>
    </section>

</div>



<!--Modelo agregar
=====================================================-->$_COOKIE


<div class="modal fade" id="modalAgregarPrograma">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" style="color: #212529 ;">Asignar Evaluador</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form action="" method="POST">
                <div class="modal-body">
                    <section class="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    </div>

                                    <div class="card-body">
                                    
                                        <div class="form-group">
                                            <input type="text" id="searchEvaluadores" class="form-control" placeholder="Buscar evaluador..." onkeyup="filterEvaluadores()">
                                        </div>

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th style="background-color: #39A900; color: white;">Evaluador</th>
                                            </tr>
                                        </thead>
                                        <tbody id="evaluadoresTable">
        <tr>
            <td>Juan Pablo Pinillos Reina</td>
        </tr>
        <tr>
            <td>Laura Gómez Pérez</td>
        </tr>
        <tr>
            <td>Andrés Felipe Torres</td>
        </tr>
        <tr>
            <td>Camila Rodríguez Díaz</td>
        </tr>
        <tr>
            <td>Diego Alejandro Vargas</td>
        </tr>
        <tr>
            <td>Paola Andrea Ríos</td>
        </tr>
        <tr>
            <td>Ricardo Esteban Morales</td>
        </tr>
        <tr>
            <td>Valentina Ruiz Ortega</td>
        </tr>
        <tr>
            <td>Manuel Antonio Castro</td>
        </tr>
        <tr>
            <td>Sofía Alejandra Ramírez</td>
        </tr>
    </tbody>
                                </table>

                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                    <!-- 
                                <?php for ($i = 1; $i <= 50; $i++): ?>
                                    <tr>
                                        <td><?php echo "SENA-" . str_pad($i, 3, "0", STR_PAD_LEFT); ?></td>
                                        <td><?php echo "Programa de Formación " . $i; ?></td>
                                        <td><?php echo ($i % 2 == 0) ? "Activo" : "Inactivo"; ?></td>
                                        <td>
                                            <button class="btn btn-warning btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php endfor; ?> -->
                                
                    <button type="button" class="btn btn-danger" data-dismiss="modal" style="background-color: #FF0000; border-color: #FF0000;">Cerrar</button>
                    <button type="button" class="btn btn-success" style="background-color: #39A900; border-color: #39A900;">Guardar</button>
                </div>
            </form>
        </div>
       
    </div>
   
</div>

<script>
    function filterEvaluadores() {
        const input = document.getElementById('searchEvaluadores');
        const filter = input.value.toLowerCase();
        const table = document.getElementById('evaluadoresTable');
        const rows = table.getElementsByTagName('tr');

        for (let i = 0; i < rows.length; i++) {
            const td = rows[i].getElementsByTagName('td')[0];
            if (td) {
                const textValue = td.textContent || td.innerText;
                rows[i].style.display = textValue.toLowerCase().indexOf(filter) > -1 ? '' : 'none';
            }
        }
    }
</script>


