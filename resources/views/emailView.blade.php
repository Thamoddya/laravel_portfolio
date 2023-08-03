<form class="contact-form scroll-animation" data-animation="fade_from_bottom" method="POST"
      action="{{ url('contact_mail') }}">

    {{csrf_field()}}
    <div class="row">
        <div class="col-md-6">
            <div class="input-group">
                <label for="full-name">full Name <sup>*</sup></label>
                <input type="text" name="full-name" id="full-name"
                       placeholder="Your Full Name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <label for="email">Email <sup>*</sup></label>
                <input type="email" name="email" id="email" placeholder="Your email adress">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <label for="phone-number">phone <span>(optional)</span></label>
                <input type="text" name="phone-number" id="phone-number"
                       placeholder="Your number phone">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <label for="subject">subject <sup>*</sup></label>
                <select name="subject" id="subject">
                    <option value="">Select a subject</option>
                    <option value="subject1">Subject 1</option>
                    <option value="subject2">Subject 2</option>
                    <option value="subject3">Subject 3</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group">
                <label for="budget">your budget <span>(optional)</span></label>
                <input type="number" name="budget" id="budget"
                       placeholder="A range budget for your project">
            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group">
                <label for="message">message</label>
                <textarea name="message" id="message"
                          placeholder="Wrire your message here ..."></textarea>
            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group upload-attachment">
                <div>
                    <label for="upload-attachment">
                        <i class="las la-cloud-upload-alt"></i> add an attachment
                        <input type="file" name="upload" id="upload-attachment">
                    </label>

                </div>

            </div>
        </div>
        <div class="col-md-12">
            <div class="input-group submit-btn-wrap">
                <button class="sendMsgh" type="submit">
                    Send Message
                    <div id="clip">
                        <div id="leftTop" class="corner"></div>
                        <div id="rightBottom" class="corner"></div>
                        <div id="rightTop" class="corner"></div>
                        <div id="leftBottom" class="corner"></div>
                    </div>
                    <span id="rightArrow" class="arrow"></span>
                    <span id="leftArrow" class="arrow"></span>
                </button>
            </div>
        </div>
    </div>
</form>
