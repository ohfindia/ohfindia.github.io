            <!-- ======= Contact Modal ======= -->
            <form id="contact-form" method="post"  style="margin: 0px;" action="getintouch.php">
                <div class="modal fade" data-bs-backdrop="static" id="contactModal" tabindex="-1"
                    aria-labelledby="contactModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-scrollable">
                        <div class="modal-content border-0">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="contactModalLabel">Contact Us</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <p class="text-muted">Please fill out the following information and we shall get back to you.
                                    </p>
                                    <div class="mb-3 col-md-6">
                                        <label for="l-name" class="col-form-label">Name:</label>
                                        <input required type="text" name="name" class="form-control" id="l-name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="l-phone" class="col-form-label">Phone:</label>
                                        <input required type="phone" name="phone" class="form-control" id="l-phone">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="l-email" class="col-form-label">Email:</label>
                                        <input required type="email" name="email" class="form-control" id="l-email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label for="l-trucks" class="col-form-label">Number of Trucks:</label>
                                        <input required type="number" name="trucks" class="form-control" id="l-trucks">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label for="l-equipment" class="col-form-label">Equipment:</label>
                                        <select required class="form-select" name="equipment" id="l-equipment">
                                            <option value="">--Select--</option>
                                            <option value="Dry Van">Dry Van</option>
                                            <option value="Reefer">Reefer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="submit" class="btn btn-primary">Get in Touch</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>