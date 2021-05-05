<template>
    <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 200px;">
        <div id="login-toast" class="toast" style="position: absolute; top: 0; right: 20px;" :data-autohide="autohide">
            <div class="toast-header">
                <svg class="rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice"
                    focusable="false" role="img" aria-hidden="true">
                    <rect :fill="squareFillColorHEX" width="100%" height="100%" />
                </svg>
            <strong class="mr-auto">{{title}}</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="toast-body">
            {{message}}
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        title: {
            type: String,
            required: true,
        },
        message: {
            type: String,
            required: true,
        },
        timestamp: {
            type: Number,
            required: false,
            default: Date.now(),
        },
        showTimestamp: {
            type: Boolean,
            required: false,
            default: false,
        },
        squareFillColorHEX: {
            type: String,
            required: false,
            default: "#007aff",
        },
        autohide: {
            type: Boolean,
            required: true,
        },
        delay: {
            type: Number,
            required: false,
            default: 50000,
        },
    },
    mounted() {
        $('#login-toast').toast('show');
    },
}
</script>