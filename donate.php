<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
      integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/donate.css" />

    <title>Donations</title>
  </head>
  <body>
    <section class="second-section">
      <div class="container-fluid">
        <div class="row justify-content-center mb-5">
          <div class="col-lg-8 pt-3">
            <img
              src="img/high-quality-logo.png"
              alt="logo"
              class="img-fluid"
              width="100"
              height="100"
            />
            <h4 class="second-section-text fw-bold mb-5">
              I am donating <span id="data_amount"></span>
            </h4>

            <form id="msform">
              <ul id="progressbar">
                <li class="active second-section-text">Currency</li>
                <li class="second-section-text">Your Details</li>
                <li class="second-section-text">Billing Address</li>
                <li class="second-section-text">Summary</li>
                <li class="second-section-text">Payment</li>
              </ul>
              <fieldset class="parent">
                <div class="row mb-3 pt-3">
                  <div class="col">
                    <label for="payment" class="float-start second-section-text">
                      <small class="">Pls enter your prefered currency*</small>
                    </label>
                    <input
                      type="text"
                      required
                      class="bg-transparent text-white"
                      name="currency"
                      id="currency"
                      placeholder="AUD, USD"
                    />
                    <p
                      class="text-white text-start mb-1"
                      style="font-size: 11px"
                    >
                      This will be used to avoid conversion fees.
                    </p>
                    <p class="text-start">
                      <small id="currency_error" class="text-danger"></small>
                    </p>
                  </div>
                  >
                </div>
                <input
                  type="button"
                  name="next"
                  class="payment_continue action-button text-dark float-end"
                  value="Continue"
                  <br
                />
                <br />
                <p class="pt-5 text-light">
                  Live stronger with natural health & bolster immunity, fight
                  the 'rise of the medical tyrants', <br />
                  <strong>
                    Join High Adventure and help bring them to justice.
                  </strong>
                </p>
              </fieldset>
              <fieldset class="parent">
                <div class="row mb-3 pt-3">
                  <div class="col">
                    <label for="Email" class="float-start second-section-text">
                      <small class="">Email*</small>
                    </label>
                    <input
                      type="email"
                      required
                      class="bg-transparent text-white"
                      name="email"
                      id="email"
                    />
                    <p
                      class="text-white text-start mb-1"
                      style="font-size: 11px"
                    >
                      Your receipt will be emailed to this address
                    </p>
                    <p class="text-start">
                      <small id="email_error" class="text-danger"></small>
                    </p>
                  </div>
                  <div class="col">
                    <label for="Phone" class="float-start">
                      <small class="second-section-text">Phone</small>
                    </label>
                    <input
                      type="number"
                      required
                      class="bg-transparent text-white"
                      name="phone"
                      id="phone"
                    />
                    
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col">
                    <label for="firstname" class="float-start">
                      <small class="second-section-text"> First Name* </small>
                    </label>
                    <input
                      type="text"
                      required
                      class="bg-transparent text-white"
                      name="firstname"
                      id="firstname"
                    />
                    <p class="text-start">
                      <small id="firstname_error" class="text-danger"></small>
                    </p>
                  </div>
                  <div class="col">
                    <label for="lastname" class="float-start">
                      <small class="second-section-text"> Last Name* </small>
                    </label>
                    <input
                      type="text"
                      required
                      class="bg-transparent text-white"
                      name="lastname"
                      id="lastname"
                    />
                    <p class="text-start">
                      <small id="lastname_error" class="text-danger"></small>
                    </p>
                  </div>
                </div>

                <input
                  type="button"
                  name="next"
                  class="first action-button text-dark float-end"
                  value="Continue"
                  <br
                />

                <input
                  type="button"
                  name="previous"
                  class="previous-payment action-button second-section-text border bg-transparent border-light float-end"
                  value="Back"
                />
                <br />
                <p class="pt-5 text-light">
                  Live stronger with natural health & bolster immunity, fight
                  the 'rise of the medical tyrants', <br />
                  <strong>
                    Join High Adventure and help bring them to justice.
                  </strong>
                </p>
              </fieldset>
              <fieldset class="parent">
                <div class="mb-5 p-3">
                  <div class="col">
                    <label for="firstname" class="float-start">
                      <small class="second-section-text">Address*</small>
                    </label>
                    <input
                      type="text"
                      required
                      id="address"
                      name="address"
                      class="bg-transparent text-white"
                    />
                    <p class="text-start">
                      <small id="address_error" class="text-danger"></small>
                    </p>
                  </div>
                </div>

                <input
                  type="button"
                  name="next"
                  class="second action-button float-end"
                  value="Continue"
                />

                <input
                  type="button"
                  name="previous"
                  class="previous-first action-button second-section-text border bg-transparent border-light float-end"
                  value="Back"
                />
                <br />
                <br />
                <p class="pt-5 text-light">
                  Live stronger with natural health & bolster immunity, fight
                  the 'rise of the medical tyrants', <br />
                  <strong>
                    Join High Adventure and help bring them to justice.
                  </strong>
                </p>
              </fieldset>
              <fieldset class="parent">
                <div
                  class="row mb-5 pt-4 justify-content-center align-items-center"
                >
                  <div class="col">
                    <div class="card h-100 bg-transparent border">
                      <div class="card-body text-start lh-1">
                        <p class="card-title second-section-text mb-3 fw-bold">
                          Thanks <span id="f_sum"></span> Almost Done!
                        </p>
                        <p class="card-text text-white fs-6 mb-5 d-none">
                          <small class="fw-bold">
                            Your Details
                            <span
                              class="text-decoration-underline second-section-text"
                            >
                              Edits
                            </span>
                          </small>
                        </p>
                        <p class="card-text text-white fw-bold mb-5">
                          Here's your data summary below
                        </p>
                        <p class="card-text text-white">
                          Full Name: <span id="fullname"></span>
                        </p>
                        <p class="card-text text-white">
                          Email: <span id="email_sum"></span>
                        </p>
                        <p class="card-text text-white">
                          Phone: <span id="phone_sum"></span>
                        </p>
                        <p class="card-text text-white">
                          Address: <span id="ad_holder"></span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card bg-transparent">
                      <img
                        src="img/in many ways the highest adventure on earth. Norman Cousins.png"
                        class="card-img-top"
                        alt="..."
                      />
                      <div class="card-body text-start lh-1 d-none">
                        <p class="fs-6 text-white">Recurring donation to</p>
                        <p class="fs-6 second-section-text">Regular Donation</p>
                        <p class="fs-6 text-light">
                          $50 every weeks equals $299 anually
                        </p>
                        <hr class="text-white border border-1" />
                        <p class="fs-6 pt-3 text-white">
                          Recurring amount: $50
                        </p>
                        <p class="fs-6 text-white">every 4 weeks</p>
                      </div>
                    </div>
                  </div>
                </div>

                <input
                  type="button"
                  name="next"
                  class="third action-button float-end"
                  value="Continue"
                />
                <input
                  type="button"
                  name="previous"
                  class="previous-second action-button second-section-text border bg-transparent border-light float-end"
                  value="Back"
                />

                <br />
                <br />
                <p class="pt-5 text-light">
                  Live stronger with natural health & bolster immunity, fight
                  the 'rise of the medical tyrants', <br />
                  <strong>
                    Join High Adventure and help bring them to justice.
                  </strong>
                </p>
              </fieldset>
              <fieldset class="parent">
                <div class="row mb-5 pt-4">
                  <div class="col">
                    <div class="card h-100 bg-transparent border">
                      <div class="card-body text-start lh-1">
                        <div class="col pt-4 first_amount">
                          <label for="firstname" class="float-start mb-1">
                            <small class="second-section-text">
                              Select amount
                            </small>
                          </label>
                          <select
                            name="amount"
                            id="amount"
                            class="bg-dark text-white border form-select form-select-lg fs-6"
                            required
                          >
                            <option value="">select amount</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="150">150</option>
                            <option value="200">200</option>
                            <option value="200">300</option>
                            <option value="200">400</option>
                            <option value="200">500</option>
                          </select>
                          <p class="text-start">
                            <small
                              id="amount_error"
                              class="text-danger"
                            ></small>
                          </p>
                        </div>
                        <div class="col pt-4 second_amount">
                          <label for="firstname" class="float-start mb-1">
                            <small class="second-section-text">
                              Amount
                            </small>
                          </label>
                          <input type="text" class="bg-transparent text-white" name="amount" id="data_amount_val" class="amount">
                           <p class="text-start">
                            <small
                              id="amount_error"
                              class="text-danger"
                            ></small>
                          </p>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="card h-100 bg-transparent border-0">
                      <img
                        src="img/image-1.png"
                        class="card-img-top"
                        alt="..."
                      />
                    </div>
                  </div>
                </div>

                <input
                  id="pay_btn"
                  type="button"
                  name="submit"
                  class="submit action-button float-end"
                  value="Pay"
                />

                <input
                  type="button"
                  name="previous"
                  class="previous-third action-button second-section-text border bg-transparent border-light float-end"
                  value="Back"
                />
                <br />
                <br />
                <p class="pt-5 text-light">
                  Live stronger with natural health & bolster immunity, fight
                  the 'rise of the medical tyrants', <br />
                  <strong>
                    Join High Adventure and help bring them to justice.
                  </strong>
                </p>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
      crossorigin="anonymous"
    ></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBtJ99NRw1wBanqdNqp7HyKGtGq_LrT2Fw&libraries=places"></script>
    <script>
      autocomplete1 = new google.maps.places.Autocomplete(
        document.getElementById("address"),
        { types: ["geocode"] }
      );
      google.maps.event.addListener(
        autocomplete1,
        "place_changed",
        function () {
          fillInAddress();
        }
      );
      function fillInAddress() {
        // Get the place details from the autocomplete object.
      }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/donate.js"></script>
  </body>
</html>
