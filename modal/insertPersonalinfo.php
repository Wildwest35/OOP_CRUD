<?php
    if(isset($_SESSION["userid"])) {
?>
        <div class="modal-bg" id="modalInsert">
            <div class="modal">
                <div class="delete-container">
                    <div class="note">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <div class="divide">
                                    <h4>New Information!</h4>
                                    <div class="item">
                                        <h4>Username</h4>
                                        <h2 id="insuser"></h2>
                                    </div>
                                    <div class="item">
                                        <h4>Afm</h4>
                                        <input type="number" id="insafm" name="afm" placeholder="Afm" class="box-forms">
                                    </div>

                                    <div class="item">
                                        <h4>Amka</h4>
                                        <input type="number" id="insamka" name="amka" placeholder="Amka" class="box-forms">
                                    </div>

                                    <div class="item">
                                        <h4>ID Card</h4>
                                        <input type="text" id="insidcard" name="idcard" placeholder="ID Card" class="box-forms">
                                    </div>

                                    <div class="send-form">
                                        <button type="submit" id="insSub" name="submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    }
?>