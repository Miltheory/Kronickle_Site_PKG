<?php

if(strtolower($_SERVER["HTTP_X_REQUESTED_WITH"]) != "xmlhttprequest") {

    header("Location: /");

} else {

    $my_mailbox_key = hash("sha256", "2Wsp779Xa227R8qR");
    $my_mailbox_iv = substr(hash("sha256", "uv2v3849mm6J2uh8"), 0, 16);
    $my_mailbox_email = base64_encode(openssl_encrypt("sean@seanmitchell.ca", "AES-256-CBC", $my_mailbox_key, 0, $my_mailbox_iv));

?>
            <div class="common-table">
                <div class="common-cell">
                    <div class="modal__wrap modal__wrap--contact">
                        <div class="modal__frame">
                            <div class="contact">
                                <div class="contact__body">
                                    <div class="contact__headline common-headline common-headline--color-blue">
                                        <h3>Hello, thanks for reaching out!</h3>
                                    </div>
                                    <div class="contact__form">
                                        <form name="contact" id="contact" method="post">
                                            <input id="mailbox" name="mailbox" type="hidden" value="<?php echo $my_mailbox_email; ?>" />
                                            <fieldset>
                                                <input id="name" name="name" type="text" placeholder="Name" />
                                            </fieldset>
                                            <fieldset>
                                                <input id="email" name="email" type="text" placeholder="Email" />
                                            </fieldset>
                                            <fieldset>
                                                <input id="companyname" name="companyname" type="text" placeholder="Company Name" />
                                            </fieldset>
                                            <fieldset>
                                                <select id="companytype" name="companytype">
                                                    <optgroup>
                                                        <option selected hidden value="">Company Type</option>
                                                        <option hidden value="">&mdash;</option>
                                                        <option value="Advertising Agency">Advertising Agency</option>
                                                        <option value="Design">Design</option>
                                                        <option value="Digital">Digital</option>
                                                        <option value="In-House Creative Agency">In-House Creative Agency</option>
                                                        <option value="Post-Production">Post-Production</option>
                                                        <option value="Other">Other</option>
                                                    </optgroup>
                                                </select>
                                                <span><svg width="13" height="8" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M13 .786L12.214 0 6.5 5.714.786 0 0 .786l6.5 6.5z"/></svg></span>
                                            </fieldset>
                                            <fieldset>
                                                <textarea name="message" id="message" rows="10" placeholder="Message"></textarea>
                                            </fieldset>
                                            <div class="contact__feedback"></div>
                                            <div class="contact__submit">
                                                <button type="submit" class="common-link common-link--color-pink"><span>Submit</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="modal__button">
                                <button>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php

}

?>
