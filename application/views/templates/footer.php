<!-- Footer -->

<div class="footer">
    <div class="row justify-content-between align-items-center">
        

    </div>
</div>


<script>
    $('.sweetalert').click(function(e) {

        e.preventDefault();
        const href = $(this).attr('href');

        swal({
                title: "Apa Anda Yakin?",
                text: "Saat Tugas selesai ,Tugas akan dihapus!",
                icon: "warning",
                buttons: {
                    confirm: 'Selesai',
                    cancel: 'Batal'
                },
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    document.location.href = href
                }
            });


    });
</script>



<!-- JS Plugins Init. -->
<script>
    $(document).on('ready', function() {
        // ONLY DEV

        if (window.localStorage.getItem('hs-builder-popover') === null) {
            $('#builderPopover').popover('show');

            $(document).on('click', '#closeBuilderPopover', function() {
                window.localStorage.setItem('hs-builder-popover', true);
                $('#builderPopover').popover('dispose');
            });
        } else {
            $('#builderPopover').on('show.bs.popover', function() {
                return false
            });
        }
        // initialization of Show Password
        $('.js-toggle-password').each(function() {
            new HSTogglePassword(this).init()
        });

        // END ONLY DEV

        $('.js-navbar-vertical-aside-toggle-invoker').click(function() {
            $('.js-navbar-vertical-aside-toggle-invoker i').tooltip('hide');
        });


        // initialization of mega menu
        var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
            desktop: {
                position: 'left'
            }
        }).init();


        // initialization of navbar vertical navigation
        var sidebar = $('.js-navbar-vertical-aside').hsSideNav();

        // initialization of tooltip in navbar vertical menu
        $('.js-nav-tooltip-link').tooltip({
            boundary: 'window'
        })

        $(".js-nav-tooltip-link").on("show.bs.tooltip", function(e) {
            if (!$("body").hasClass("navbar-vertical-aside-mini-mode")) {
                return false;
            }
        });

        // initialization of unfold
        $('.js-hs-unfold-invoker').each(function() {
            var unfold = new HSUnfold($(this)).init();
        });

        // initialization of form search
        $('.js-form-search').each(function() {
            new HSFormSearch($(this)).init()
        });

        // initialization of file attach
        $('.js-file-attach').each(function() {
            var customFile = new HSFileAttach($(this)).init();
        });

        // initialization of step form
        $('.js-step-form').each(function() {
            var stepForm = new HSStepForm($(this), {
                finish: function() {
                    $("#createProjectStepFormProgress").hide();
                    $("#createProjectStepFormContent").hide();
                    $("#createProjectStepSuccessMessage").show();
                }
            }).init();
        });

        // initialization of select2
        $('.js-select2-custom').each(function() {
            var select2 = $.HSCore.components.HSSelect2.init($(this));
        });

        // initialization of quilljs editor
        var quill = $.HSCore.components.HSQuill.init('.js-quill');

        // initialization of tagify
        $('.js-tagify').each(function() {
            var tagify = $.HSCore.components.HSTagify.init($(this));
        });

      
        // initialization of dropzone file attach module
        $('.dropzone-custom').each(function() {
            var dropzone = $.HSCore.components.HSDropzone.init('#' + $(this).attr('id'));
        });

        // initialization of datatables
        var datatable = $.HSCore.components.HSDatatables.init($('#datatable'), {
            dom: 'Bfrtip',
            buttons: [{
                    extend: 'copy',
                    className: 'd-none'
                },
                {
                    extend: 'excel',
                    className: 'd-none'
                },
                {
                    extend: 'csv',
                    className: 'd-none'
                },
                {
                    extend: 'pdf',
                    className: 'd-none'
                },
                {
                    extend: 'print',
                    className: 'd-none'
                },
            ],
            select: {
                style: 'multi',
                selector: 'td:first-child input[type="checkbox"]',
                classMap: {
                    checkAll: '#datatableCheckAll',
                    counter: '#datatableCounter',
                    counterInfo: '#datatableCounterInfo'
                }
            },
            language: {
                zeroRecords: '<div class="text-center p-4">' +
                    '<img class="mb-3" src=" <?= base_url('assets/svg/illustrations/sorry.svg') ?>" alt="Image Description" style="width: 7rem;">' +
                    '<p class="mb-0">No data to show</p>' +
                    '</div>'
            }
        });

        $('#datatableSearch').on('mouseup', function(e) {
            var $input = $(this),
                oldValue = $input.val();

            if (oldValue == "") return;

            setTimeout(function() {
                var newValue = $input.val();

                if (newValue == "") {
                    // Gotcha
                    datatable.search('').draw();
                }
            }, 1);
        });

        $('#datatableWithSearchInput').on('mouseup', function(e) {
            var $input = $(this),
                oldValue = $input.val();

            if (oldValue == "") return;

            setTimeout(function() {
                var newValue = $input.val();

                if (newValue == "") {
                    // Gotcha
                    datatableWithSearch.search('').draw();
                }
            }, 1);
        });

        $('#export-copy').click(function() {
            datatable.button('.buttons-copy').trigger()
        });

        $('#export-excel').click(function() {
            datatable.button('.buttons-excel').trigger()
        });

        $('#export-csv').click(function() {
            datatable.button('.buttons-csv').trigger()
        });

        $('#export-pdf').click(function() {
            datatable.button('.buttons-pdf').trigger()
        });

        $('#export-print').click(function() {
            datatable.button('.buttons-print').trigger()
        });

        $('.js-datatable-filter').on('change', function() {
            var $this = $(this),
                elVal = $this.val(),
                targetColumnIndex = $this.data('target-column-index');

            datatable.column(targetColumnIndex).search(elVal).draw();
        });

        $('#datatableSearch').on('search', function() {
            datatable.search('').draw();
        });

        // initialization of flatpickr
        $('.js-flatpickr').each(function() {
            $.HSCore.components.HSFlatpickr.init($(this));
        });
    });
</script>

<?php if ($this->session->tempdata('flash')) :
    $temp =  $this->session->tempdata('flash');
?>

    <script>
        swal({
            title: "<?= $temp['title'] ?>",
            text: "<?= strip_tags($temp['text']) ?>",
            icon: "<?= $temp['type'] ?>",
            buttons: {
                confirm: 'Ok'
            }
        })
    </script>
<?php endif;
?>

</body>

</html>