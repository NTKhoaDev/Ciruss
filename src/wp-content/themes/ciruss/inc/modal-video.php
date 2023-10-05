<!-- The Modal -->
<div class="modal fade modal-video" id="modalVideo">
    <div class="container-fluid">
        <div class="container-center">
            <div class="modal-dialog">
                <div class="modal-content">
        
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <span class="close-video close-modal" data-bs-dismiss="modal">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/close-black.svg" alt="close">
                        </span>
                    </div>
            
                    <!-- Modal body -->
                    <div class="modal-body">
                        <div class="video-wrap video-modal">
                            <iframe class="absolute"                  
                                src="" 
                                title="YouTube video player" frameborder="0" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>