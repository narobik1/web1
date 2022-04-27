<section id="gal" class="container-fluid d-flex justify-content-center align-items-center flex-column">

    <div id="about" style="background-color: rgba(0, 0, 0, 0.699); border-radius:15px" class="p-5">
        <h1 style="margin-top:10px;">Send an e-mail to us!</h1>
        <form id="formkapcsolat" name="kapcsolat" action=".?page=message" method="post">
            <div>
                <label class="form-label" for="subject">Subject (up to 30 characters)</label><br>
                <input class="form-control" type="text" id="subject" name="subject" max-size="30" required maxlength="30">
            </div>
            <div id="szoveg">
                <label class="form-label" for="message"> Message (from 10 to 255 characters): </label>
                <textarea class="form-control" id="message" name="message" required minlength="10" maxlength="255"></textarea>
            </div>
            <div class="mt-5">
                <input class="btn btn-outline-light" id="kuld" type="submit" value="Send" name="kuld">
            </div>
        </form>
    </div>
</section>