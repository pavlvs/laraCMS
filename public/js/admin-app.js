;(function () {
    function confirmDelete (target) {
        const action = target.href
        const message = target.getAttribute('data-message')
        const formId = target.getAttribute('data-form')

        if (confirm(message)) {
            const form = document.getElementById(formId)
            form.action = action
            form.submit()
        }
    }
    document.addEventListener('click', function (e) {
        const target = e.target
        if (target.className && target.classList.contains('delete-link')) {
            e.preventDefault()
            confirmDelete(target)
        }
    })
})()
