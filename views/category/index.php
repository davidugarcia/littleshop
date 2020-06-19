<h1 class="text-center pb-">Gestionar Categorias</h1>

<article class="text-center py-1">
   <a href="<?=base_url?>categoria/crear" type="button" class="btn btn-outline-dark">
      Crear categoria
   </a>
</article>

<div class="d-flex flex-wrap justify-content-center">
   <div class="col-lg-5">
      <table class="table table-hover table-dark">
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">NOMBRE</th>
            </tr>
         </thead>
         <?php while($cat = $categorias->fetch_object()): ?>
         <tbody>
            <tr>
               <th scope="row"><?=$cat->id;?></th>
               <td><?=$cat->nombre;?></td>
            </tr>
         </tbody>
         <?php endwhile; ?>
      </table>
   </div>
</div>