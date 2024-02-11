<?php include $this->resolve("partials/_header.php"); ?>

<!-- Start Main Content Area -->
<section class="container mx-auto mt-12 p-4 bg-white shadow-md border border-gray-200 rounded">
    <!-- Page Title -->
    <h3>About Page</h3>

    <hr />

    <!-- Escaping Data -->
    <p> This is the about page of the expense tracking application "PHPIGGY".
        We've been around for over a decade now doing our businesses and helping
        individuals, companies, and the society at large to track their expenses
        and curb excesses to the nearest minimum. If you're new to our app, Pizzy is
        here to take you on a tour to our app, fell free and YOU ARE WELCOME ALWAYS!.
    </p>
</section>
<!-- End Main Content Area -->


<!-- Escaping Data: <?php echo e($dangerousData); ?> -->
<?php include $this->resolve("partials/_footer.php"); ?>