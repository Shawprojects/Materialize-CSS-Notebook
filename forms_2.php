<?php include('includes/header.php'); ?>

    <!-- Section: Body -->
    <section>
        <div class="container">
          <h3 class="center brown-text">Fancy Form & Input</h3>
          
          <!-- START HERE -->
          <form>
            <!-- SWITCH -->
            <div>

            </div>

            <!-- DISABLED SWITCH -->
            <div>

            </div>

            <br>
            <br>

            <!-- FILE INPUT -->
            <div>
              <div>
                <span>Upload File</span>
                <input type="file">
              </div>
              <div>
                <input type="text">
              </div>
            </div>

            <!-- RANGE SLIDER -->
            <p>
              <input type="range">
            </p>

            <!-- DATE PICKER -->
            <div>
              <input type="text" id="date">
              <label for="date">Choose a Date</label>
            </div>

            <!-- TIME PICKER -->
            <div>
              <input type="text" id="time">
              <label for="time">Choose a Time</label>
            </div>

            <!-- CHARACTER COUNTER -->
            <div>
              <input id="post" type="text">
              <label for="post">Post</label>
            </div>

            <!-- AUTOCOMPLETE -->
            <div>
              <input type="text" id="fruit">
              <label for="fruit">Type a Fruit</label>
            </div>

            <br>
            <br>
            <div>
              <input type="submit" value="Submit" class="btn">
            </div>
          </form>



          <!-- END HERE -->
        </div>
    </section>
  </main>

<?php include('includes/footer.php'); ?>