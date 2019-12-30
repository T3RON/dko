<?php if ($this->session->flashdata('msg')):
    $msg = $this->session->flashdata('msg');
     ?>
    <script>
        swal({
            title: "<?php echo $msg['title']; ?>",
            text: "<?php echo $msg['text']; ?>",
            timer: 4500,
            showConfirmButton: true,
            type: '<?php echo $msg['type']; ?>'
        });
    </script>
<?php endif; ?>