<?php 

	$pageTitle = "Blog";
	$activePage = "blog";
	
	include 'header.php';

	$posts = json_decode(file_get_contents('../data/blogposts.json'), true);
?>


<h1 class="mt-5"><?php echo $pageTitle ?></h1>

<div class="blog-posts row mt-5">
	
	<?php foreach ($posts as $k => $post) : ?>
		
		<div class="col-12 col-md-4 mb-4">

			<div class="card">
				
				<div class="card-body">
					<h3 class="card-title">
						<a href="./post.php?post=<?php echo $k; ?>"><?php echo $post['title']; ?></a>
					</h3>

					<small class="card-text text-muted">
						Posted <?php $datetime = new DateTime($post['created']); echo $datetime->format('d.m.Y \a\t H:i'); ?>
					</small>					
					
					<p class="card-text">
						<?php echo $post['excerpt']; ?>
					</p>
				</div>

			</div>

		</div>

	<?php endforeach; ?>

</div>


<?php 
	include 'footer.php';
?>