<!-- AddLecon -->
<div id="add_lecon" class="row">
	<div class="col-12">
		<div class="row">
			<div class="col-12 text-center">
                <h2>Créer une nouvelle leçon</h2>
                <br>
            </div>
		</div>
        <hr>
        <form method="post" action="post.php" enctype="multipart/form-data">
			<div class="row">
                <div class="col-md-6 col-xs-12">
                    <!-- Titre -->
                    <div class="form-group">
                        <label for="first_name">Titre</label>
                        <input class="form-control" type="text" id="lecon_title" name="lecon_title" placeholder="Titre">
                    </div>

                    <!-- Theme -->
                    <div class="form-group">
                        <label for="first_name">Titre</label>
                        <select class="form-control" id="lecon_theme" name="lecon_theme">
                            <?php
                                $sql = 'SELECT * FROM themes';
                                $result_sql = $host->query($sql);
                                while ( $row = $result_sql->fetch() ){
                                    $theme_id = $row['id'];
                                    $theme_title = $row['title'];
                                    echo '<option value="'.$theme_id.'">'.$theme_title.'</option>';
                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12">
                    <!-- Description -->
                    <div class="form-group">
                        <label for="last_name">Description</label>
                        <input class="form-control" type="text" id="lecon_description" name="lecon_description" placeholder="Description">
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success" id="submit_add_lecon" name="submit_add_lecon">Ajouter leçon</button>
            </div>
		</form>
        <br>
	</div>
</div>
<!-- ./AddLecon -->