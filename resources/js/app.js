import './bootstrap';

import Alpine from 'alpinejs';

// alerta on delete
import Swal from 'sweetalert2';

window.deleteConfirm = function(formId)
{
    Swal.fire({
        icon: 'warning',
        text: 'Do you want to delete this?',
        showCancelButton: true,
        cancelButtonText: 'Can',
        confirmButtonText: 'Delete',
        confirmButtonColor: '#e3342f',
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById(formId).submit();
        }
    });
}
// end alerta on delete

// tooltips


// en tooltips

window.Alpine = Alpine;

Alpine.start();