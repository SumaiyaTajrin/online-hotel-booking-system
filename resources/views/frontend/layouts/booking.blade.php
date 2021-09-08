


<style type="text/css">
            body {
    background-color: #eee
}

#modal-signup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: none;
    animation: modalFadeIn ease-in 0.4s;
    background-color: rgba(0, 0, 0, 0.6)
}

#modal-signup #btn-close {
    position: absolute;
    top: 0;
    right: 0;
    z-index: 5;
    padding: 14px;
    font-size: 25px;
    color: white
}

#modal-signup #btn-close:hover {
    cursor: pointer
}

.col-bg {
    padding: 8px 16px;
    background: linear-gradient(to bottom, rgba(26, 111, 118, 1) 50%, rgba(40, 30, 101, 1) 100%, rgba(125, 185, 232, 1) 100%)
}

.sign-up .heading {
    font-size: 37px;
    font-family: cursive;
    color: springgreen;
    margin-top: 16px;
    text-align: center
}

.sign-up .form-group-spe {
    display: flex;
    flex-direction: row;
    justify-content: space-between
}

.form-group {
    margin-right: 0 !important
}

.form-control {
    font-size: 13px;
    border-radius: 30px;
    border: none;
    outline: none;
    height: 35px
}

.form-control:focus::placeholder {
    border: none
}

.form-group-spe p,
.form-group p,
.form-check-label {
    font-size: 14px;
    margin-bottom: 4px
}

.form-group-spe .form-control {
    width: 100%
}

.form-group .form-control {
    width: 100%
}

.sign-up .form-group {
    display: block
}

.btn-success {
    margin-top: 8px !important;
    width: 35%;
    height: 35px;
    border-radius: 30px
}

.btn-success:hover {
    box-shadow: rgb(38 57 77) 0px 20px 30px -10px !important
}

.form-check-input {
    width: 20px;
    height: 20px
}

.col-title {
    display: flex;
    flex-direction: column;
    justify-content: center
}

.col-title h1 {
    font-size: 60px;
    margin-left: 50px;
    color: springgreen;
    font-family: cursive
}

.title-social {
    font-size: 13px;
    text-align: center;
    margin-top: 6px !important;
    margin-bottom: 2px !important
}

.signup-other {
    display: flex;
    margin-top: 6px;
    align-items: center;
    justify-content: space-around
}

.signup-other .social img {
    width: 20px;
    height: 20px;
    margin-right: 8px
}

.signup-other .social {
    width: 50%;
    height: 40px;
    display: flex;
    flex-direction: row;
    justify-content: center;
    margin-right: 6px;
    padding-top: 8px;
    border-radius: 30px;
    background-color: dimgrey
}

.signup-other .social:hover {
    cursor: pointer;
    opacity: 0.8;
    color: springgreen;
    background-color: #222425;
    transition: all 0.3s ease-in
}

.social p {
    text-align: center
}

.re-login {
    font-size: 13px;
    margin-top: 16px;
    margin-bottom: 4px;
    text-align: center
}

.re-login a {
    font-size: 15px;
    text-decoration: none;
    color: springgreen
}

.re-login a:hover {
    color: #DE9254
}
</style>
<div class="container">
    
    <div class="d-flex justify-content-center">
        <div class="row my-5">
       
           
            <div class="col-bg col-md-6 text-left text-white lcol">
                <form class="sign-up">
                    <h2 class="heading mb-4">Booking form</h2>
                    <hr>
                    <div class="form-group-spe fone mt-2">
                        <div class="form-item">
                            <p>First name</p> <input name=name type="name" class=" form-control" placeholder="First name">
                        </div>
                        <div class="form-item">
                            <p>Last name</p> <input name=name type="name" class=" form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group fone mt-2">
                        <p>Email</p> <input name=email type="email" class=" form-control" placeholder="Email">
                    </div>
                    
                    <div class="form-group fone mt-2">
                   <label for="contact_no">contact_no</label>
    <input required name="contact_no"type="text" class="form-control" id="contact_no" placeholder="Enter Your Contact No">
    </div>
    <div class="form-group fone mt-2">
    <label for="inputAddress">Address</label>
    <input required name="address" type="text" class="form-control" id="inputAddress" placeholder="Enter Your Address">
    </div>
    <div class="form-group fone mt-2">
    <label for="Check_in_date">Check In Date</label>
    <input required name="Check_in_date" type="text" class="form-control" id="Check_in_date" >
    </div>
    <div class="form-group fone mt-2">
    <label for="Check_out_date">Check_Out_date</label>
    <input required name="Check_out_date" type="text" class="form-control" id="Check_out_date" >
    </div>
    <div class="form-group fone mt-2">
    <label for="no_of_people">No_Of_People</label>
    <input required name="no_of_people" type="number" class="form-control" id="no_of_people" >
    </div>

    
       

    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Book Now
</button>
</form>
            </div>
        </div>
    </div>
</div>