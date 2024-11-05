<script>
    function navigateToCategory(category) {
        const formattedCategory = encodeURIComponent(category);
        window.location.href = `/category/${formattedCategory}`;
    }

    function redirectToPost(button) {
        const postId = button.getAttribute('data-id');
        window.location.href = `/post/${postId}`;
    }
</script>
