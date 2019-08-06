<?php include('includes/header.php'); ?>

    <!-- Section: Body -->
    <section>
        <div class="container">
          <h3 class="center brown-text">Basic Form & Input</h3>
          
          <!-- START HERE -->
          <form>
            <!-- TEXT FIELD -->
            <div>
              <input placeholder="Name" id="name" type="text">
              <label for="name">Name</label>
            </div>

            <!-- VALUE & DISABLED -->
            <div>
              <input placeholder="Email" id="email" type="email">
              <label for="email">Email</label>
            </div>

            <!-- TEXTAREA -->
            <div>
              <textarea placeholder="Message" id="message"></textarea>
              <label for="message">Message</label>
            </div>

            <!-- INLINE FIELD -->
            Number of users:
            <div>
              <input id="users" type="text">
              <label for="users">#</label>
            </div>

            <!-- ICON PREFIX -->
            <div>
              <input id="phone" type="tel">
              <label for="phone">Phone Number</label>
            </div>

            <!-- VALIDATION & ERROR -->
            <div>
              <input placeholder="Email" id="email" type="email">
              <label for="email">Email</label>
            </div>

            <!-- SELECT (Must be initialized) -->
            <div>
              <select>

              </select>
              <label>Select List</label>
            </div>

            <!-- OPTION GROUPS -->
            <div>
              <select>

              </select>
              <label>Multiple Select</label>
            </div>

            <!-- MULTIPLE SELECT -->
            <div>
              <select>

              </select>
              <label>Multiple Select</label>
            </div>

            <!-- RADIO BUTTONS -->

            <br>
            <br>

            <!-- CHECKBOXES -->


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