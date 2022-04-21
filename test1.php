<html>
  <head>
    <!-- include the bootstrap cdn links. 1 for CSS, 3 for JS. -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
      /* cursor class because 'javascript:void(0)' and '#' in a link that
      does not direct me anywhere kinda bothers me. */
      .cursor {
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <?php 
      # i assigned the following variable to simulate the amount of rows you have.
      $totalRowCount = 7;
      $i = 0;
      while ($i < $totalRowCount) { 
        /* modal and trigger (buttons/links) are thrown inside the while loop.
        notice the iterator is appended to the data-target's id as well as the
        id for the modal being called. so if you use your $row['id'] in place
        of the $i, you can call each game's info separately. */ 
    ?>
      <!-- Modal Trigger -->
        <a class="text-primary cursor" data-toggle="modal" data-target="#exampleModal<?=$i;?>">
          Row <?=$i;?> Info
        </a>
        <br />
        <br />
      <!-- Modal -->
        <div class="modal fade" id="exampleModal<?=$i;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Game <?=$i;?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php
                /* replace 'data for game $i' with your $row['data'], or whatever 
                info is going to populate the modals. */ ?>        
                Data for Game <?=$i;?>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    <?php 
      $i++; 
      } #end while ($i < $totalRowCount)
    ?>
  </body>
</html>