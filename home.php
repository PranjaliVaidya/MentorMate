<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
        <!-- <script>(function(w, d) { w.CollectId = "623bdbdfbc2315111d70d554"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script> -->
        <!-- <<script src="//code.tidio.co/ui4ve8tvpir66lghcaqqmrsyaymovtve.js" async></script> -->
<style>
        #ques{
            min-height:533px;
        }

        
   /* background-size: 100% 200%; */

/* .Home h1{
    size: 10px;
    font-s .Home{
    padding:250px;
    margin-top: 20px;
    margin-right: 30px;
    margin-left:50px;
    border-radius: 10px;
    background-image:url("bg3.jfif") ;
    backgrize: 80px;  */
    
    /* font-family:'Times New Roman', Times, serif;
    color: rgb(245, 240, 241);
    text-align: center;
      
} 

.row{
    margin-top: 20px;
    margin-right: 30px;
    margin-left:50px;
} */


  </style>
   
    <title>MentorMate Forum</title>

</head>

<body>

    <?php include 'partials/_header.php'; ?>
    <?php include 'partials/_dbconnect.php'; ?>
    

    <!-- carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="data:image/png;base64,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"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAaAAAAB5CAMAAABIrgU4AAABBVBMVEUiIiIAreT///8VFRV3eXsAAAAaGhoeHh4SEhKKioobGxsjDQBpaWlcXFwfHx8XFxcoKChwcHAjHBiCgoJKSkqVlZUHodMAs+xjY2M0NDQ5OTkiHx0LCwsXXHsjFAUjEAAjGRAPh7KUlJTk5OSdnZ2JiYlVVVWpqalFRUXQ0NDAwMATCACvr68+Pj42NjbKysoYAAAhJikVaY4Xa4obUWsfO0ogMz0eQlQLl8YgLDK7u7vo9vwaXHbq6uocR1wOjroUep4kAABNQTp0a2UZY36Di409dZRqmLQTcZo2KCCQ2Pd60PSQrr1Vvuk9TFM2wPVicHZ/m6ejsbdpf4pIosc8YnJcjamicurwAAAR3ElEQVR4nO2dCXujutXHSbBAxiAW2/ECxsSDsWcSe7I6S7Pd3rRNZzq9Xd633/+jVAKMwWZfMqTX/+fJnXOdIIN+SDo62ihqr7322muvvfbaa6+99tprr71+n1IVNdHe66dJba2uVi3Vs69D7I8oVcFS4+2PIOX6qNfrHV0rPtvYsj+ijKeL0ehipcTZH0HqqndA1FupG/s6aH9EGaMnQ1GMixuV2Feh9ofQ+NYFcTumxs+79gG2P6DUmyuD/KtfKJH2e0iEkC6mE5fDQe8Ebmzos+mCXwGhWHk+cPhbAjoZGfYv1NXVycmFz3Y/p+6uTuCOaKbc22K0RnfSLKY/eSD+1Gz67MDnhTTpNmDJD74lWhOm3S392S0hJ3/x2f/BtrGxdzTlaVjifWn9WUcrWoLODtY6i7QLliCtY/Jaic+9JQSmJi9FlCCKGm1KjeqzjVFICaKE7oTmyroxbdoAbOFUjBe33XkxfLYesIuKBY0pKJxKVOLS6VzbKaHK6Nz592GlKqM72yNQroJ2SGIclGbzkoo7LculvJa67SX0bvUYu7A0vkGXkU6IuFMt7DVV3nTsEhgr0v4ob4ZnGz47TAiYi+KvPUlIMkt6KceXtwe3l46v1sL20WVrxy4sYEqonJS2E54xoQmr5xdXd6vRhb5lU347PMXTUjIWdkt7YGPcGhsJdmGx3TKbX0+cIEf5iMb11dW54dqrcDtM7LxdRmmH1TxwZarofmFMPZI3xKiZJdwqkqZVVerViJ5WUsfRk/K509NB8VtlLb7avkXZYvpCaf6rT1Kz/PeUE/rFb5UTPhggrl/CU+8ILdtZwhSqYihsYuko5eWnLf5jtUEVARpkAKS27h4uX+d/PYHxfnQZgLh+o81XUWVUpp8PSL++7X379v379791O7E9yFJKELj/UlnfvBL9dEDj1973b05w5O3XblzmldO+w49Vw/10QMZD79uPdfz37a+zGEIfzgErRQUBIS60bU8PSD348cOL//ZW82b0C54dEBq3Uquuw2vFAKE5vwgjlBqQcdn7drABdHzSJd2y8C5rZkDo7ii96joAWgwQ07EIIMYZVtugSg1ofOsrQFgtakJT6vXrtd7SjS1MrCVnLEHK3387SKujkqKbZasQIK4zHEgIarxpdrtmc6Ctk0oNqHX0zZ9LPQpOIKW8kmkxx5dXd60xxuRxl7JGEhj5Hx8fEJ+/W8DOFywlMuaMt0e2h5OZ4Lbx2QD9+MMP9+c3FjZpyni1R1SwDm6PL5+o1tgtTFkjPYwsrD46IEqScl866HCUxs8G7rgcgqA9czqbGao4DOj74beDb4ffyc8ZjQEpDz0v3wimo+eXh2tjt85LFAZ0cv3RAeUXJzAUaLaB772mpXuJEMrgJJAq7rf1z7FuV3FXva3cI4XpKFCYUgkD4oyUhOoKSAMg5wAwmg+Q1raHj1kauvUkAvfET04NSD3/7nMSejeK1oXYSdgGFChMdy095dwsAogybkJT+xiAEJg9PuYcAuYsjrMmgCSybLfn7jwMRJGBzwwd1deNl9A7HsM28Qr1mCwlhen4Kl1u2oBSEqolIAQ+H2Llik6h+RLZo9As/ZUk8mngtES0jHsrGUI9Z/9cu8K95xaSTFIix7fxmdlLOSXDAUQZTykI1RGQyycfIdbiGMKCAo9OIoeSU4bATMsULAX/siuv3sFri4IzO5CAu68J2UkmOyXLBZSqDNUQkMcnFyHWYiGJnGnmViL0dM5mGm4A5r9Hl5dPrRNIoaEd6lGpxAxN1fFfA0pThmoISPP45CCEBgtEk0kCXgE6PHTSQFQXZgJEgb7Z7Kjz9oSBmh3qofSXpAxNlZ8eoBSE6geI6R8e5ifEdtxpNmCThju7AZoZAVEMlOS2PJC6XVycbKeydZSQoRkBUfqO6153QBruYxYgxHZY5/F9Jcj117MDwsWOoRmEoNSdtC2Sp6oSToi0VbayVXFUMqGaAcL+NUBagTKEmyCxYbFkiHKdwCc3gTyA1rcFUfOrzVkdvxz0fFlquxFHz8fHx89HuQBR+kMsoXoBIv7B52KEBu4EGXawvl5wY80FAJGrWTf2ZBgPL7eOg9c7un25fLprtca6ro9/OcY5/ZzGzw4ASiBUK0CO/1aQEPYTJmRuFW05VzfWV2uFAPmk6OOWfn53p7TsqPY6xKNjQL3j7IDiCdUJ0Nq/JoT4U/OTR+hrNkKa06CL2uTLV5NaD4WynbZYDiAsdwGYvV5GW6/MIYBezmg6Mbi9BYgaxxCqEaBN/+czwLmrgUlOQtD0wthA83JLMzNFEmJFt81Jt+ushpvOps7Ks+n/4fz8CzbmSYS2AZEZKvUH5OufupWa74NMhNAwbIIvh3tHZQECXzraugSBJnBK0MklLkGvJzlKUByh2gDy8zm8t3nA9mE+Qtpsd2I3mA1QWYBE2XG6bdHebGL9qNd7SBPQ3gVEtaKiSHUBFOCzBtQ8zEvofvuvodyGGWeWRguYlqCMXedgA4gaXx495QQUSagmgIJ8Dh/t/A3GFLIQYhenIFCGtL49eMGVMoWN4fuC9XDkLI70A6KMsZJm+HsHEKI17SycUD0AbfFxihCiNCEvIWZxOti0QxyYTuyL6WYZi1o0EwjC68FqFxAlzgcpZohuA9JAYzZrn12EEaoFoB0+tqs9hwUIsdDsMhpkOI6GQDgVnHAPKGOtFWc16EX7ZL0tEfR5JEyj0Zwmf8UWIDB1nq8bRqgOgEL4HH4CdBt72/kJUdrQNCe80G+bZgM4+cH0s85gC00Y15bQ9AbkNf9aQEYE02FGLw7MvHojhFANAIXxIYAah8UIIahJfZnveFuXsGzcFOu0soPldLvjogZd/6w4FjdQVuKq7wAg0dfS/ro7nPEzAbHOVKgwPg4gDARBS+jf7xBKWxA4hvGyi5ZOy1he5yxJBbMhRKR1a/g3DGAtTZtlrOL8j/8IdghVBQgxiaLnC2brBrcBESAcrjY2/rZDCPAwOf2ARKjJJizBQ0ADxykAk8kSilZwUxTtftJNMc3UDwhBt3qzO32DX7YJVQIIQTjkk9X/2mEpWg7jswZ06NT1vsEdXiSxHLOfIn2/Gl1TKKF+I9/t5i2U2pOJHNxWiG6CNC+BHxC7tB+rLdujYAJjx8QrBkQPzG5bSKGvC9Y3dyAUkOy8rptKjhCDE9xTzKYhhPnnevuFPJ8A0TvbXdHp1igHShAiT3UqN2xAOEO2CFUACDS6uF3mEoX7DPg2RT4WkOO0gq/eL2ximkAnpx9QWWv64SSuJ5UDkFM7NBoOIFLIg4TKB6RNea8uIfuy0ZFODbIf1Zf5IYA+kYiAiLzPPztp/7T1tlyXhEaj/IA8gOyAlgto5kx88BMqHRDTb7jNJgtpq93ttrGfG/v+hhJaAzr8AgAYPG74VLOFT1qxVpeMLET1d/MAsr0kB9Cj+2b/8tyrDpC2nrGrdWamvGDRHPcUl7HzrMMIeYAwlM3I3c/mY791uOmJ4pALEMLPbwP67FU2rQ2hsgExshOIZ+EMezQizk8We7hdMzZnQwj5AB3WiI8tTuhH9MNyASIT8BqEENh8uCFUNiDYtQsLt7yXSHiftDM4U7XFPcpG6DEEUE34xGzbkhMQBQkgES02S8Fa7ua9pQNyditCAzvcLw3YzpAdUqQY3cd2sHcIyTS7eKwhHyf4UWoVR9lB1kZDIj+Idau5NaHSAdm36CwvYJEMrQUtcywpSfH73m0RInt7cNr78cH5kkqiRSY5+EKlQRUC1ME/FmNZ7mfuBtiVAIKTOYsdnjndp6zFUoBWB+H+TiN2MDNAyHGmgfk+fBgIl52UEr7gN1xsCOF1XCFAFvnBrZHMcAz+NXLKUCWAOLLSgxPlwdCyhn1pwZOtccEsfsmcn5BT2vytUHV8EODNSZuXU4mXP5OOKphJoT2x4oCIwVj271V7G9gqANkLPRZ9JMpSR5I6AxlK/IBi+IThZh+hnRJUHR8WzXgNiiljrrDvbE8GZx0tZPPTcgDNSX3HuoSqAGRX0dxQ7mAngRiUJRMjcetIHyELA4H0e5Qf6jTT/vHrjAVtkx9Ijja/TQ3I0gIbcAOvDfJIkT/Qzm571QCClCSJWscZW2Tnc40ZSPbH8fIRagPQf4/4Aa5486VNa1bb0a8bwCkBccKs251geXvYEy6y+2P/Z701fiUlSMQkBn2eX88dYwSe70v2PrHSMvZq8OUwRBXyERtW7rAe5874fdl8RP/zJN2lGqQEWbYCJSggt4hpajkbkftukbxDuC+EaF8EDkFIO6sLlqF7HG0URqhK/1qLcpjTSjGee1feXDh19ZZ2uwTJ5uD+j7gLyH1v1LKPxSGAGFKCBF8JwqVJsEsQmg8Srt8lVCUfNCy457WxOur5Fw6r1Ntdus0S2IUd3nG6HtGASpfXBi1Zbb502qDFUENDuw1iO4kJbBOqtH8q2t5SfrXsZQm3/mZCv3gyUl3LOA4B49zHDqBSzhsI0caLG8iC7cWxA6rPS44Xx6b43iChauM7YmNZIHlFdwZueoEyo1+N0jUbou0RLEkWLXcAzasERDeHCC14CZJ+ENVZypokDyiuL4tcmhfDT6ji+JvYSJ7EFqnxzYF74stVgJBxE3USx5acZmhAi9IOn0b+raQSRAAhyiSRBJpfLgUSSZj33UhCoo/gaEOo6vhoAUBq680702pr9wr17u08TdvuNEMNWd7lE3nCRGE5sThzSGJxHdiXrMXQgsIcYV+7TbMpm741ocrj1/kB6Svfcu/brb6KalykOg1TFHbROCrWNMbJ6appdjCNZdfRbOwvkY+ktN/rEKp+fCE3oFZgwVVvp7zoI+dwwqTvDyk8tirj4wIiyz/wP9KQ6wzZBWVvB4YrPSt1bgDz8XFW/fhPTkCq8RyYGrXVCBEZT2lcBRTS+lTqInjBDmZ+KtIk0sXaI6pQuh+waJm4eHOj/PvFZVE+QCra2s0ibAsl5TrmUChPbjO0pX6F52Cuo1GcNGsAe64gYqA2JVtSIqt2+3/nA7S720hYwAwTMpLTYjq7fCrdJ90LFyLQn3UFSRSlvjmzAIu9hBqMWG8pF6DW8c4ShN1GCEt52q35dsXMt/lEDAaWJF88l9MoeULW6HAahxaMUJlrn195ACkhG1SFNEJYxsVdivQ4iQ+2P9We8xsMuNs7i5MXgrWsjIsP2erayY3yANKfd/hEHU5qpDpgGomLvtf/6XAVP3fEiAgGlC0r8AXvQCgXIHefnoCOflFCpI/SxaIRg4Ydy7Lmklj5Q0cNWbHJJ1kFVM3pJ9vKA+j8OEyjUF2cp00VMSKXMYvyKeWYYqLqC4jSwxRWgBTFSJ0omr9HjUH9LgBVIk4oY31zCu0B5dO7nQK5B5RPe0Ch2gPKrd8bILbzTm0QLOks5ve5YXpam/CGWMEh1uHfU9JZzGWRjv+S+hxBH7liIihV2czrirLjVHSazEZx59ZvRA5zXtsowo5RKQfZlyOxkebwcuN6NHoy1F17tbFjBYpOBPTEyFHrDH0yqIfLJ3dnvSg7RrBd3dByZoEUGwkZF1eqcfNmb4RGbMVnrz+PldYub8IdmIlJDXjr0o6DrZSNfb1tx4gdlPY6lSAkzUDC62JcnCtk0cObGmEnfYfGt8t7YsSewvgy5J0Wc64G7fWEgbvYN4qW4hf9vbfYwelci3sp1Zv1qMZIUa9dWw3a0VcjDmqTEvmQFGcCoLno9YjrA7F6LzqrH4TYx3rktQwN5JxHfFUmBKZmYyFFyst/Y6Sq60C5bRuOrYzU6KsHwsRclNvkIpyHzX70csT/95aq/zHSjhLfNPs140ORNS3zdoz+Yzh/pvwZ24rP9n0eLR6VsdtXUAyUhOj1iP/2hjZ/jbSjZKGSNlcqWaxIR+rk6tr1gS5OPFv32fjz6Kvpip6Xi94C7m4N4vlMPA+3Iy+uj/eWQYYzUcgYYSB+W3/b2HXS2J2d1ntSgvbxxv6fknp9gTukhj0pMmCvLqi1XSvZ8596vUt9yzZuHbumB8nnl3pOhmmdacVRdp2kjl+fb4+v9Y19Y9vIZ/+PiYzTqgl2nWToY11NsPfaa6+99tprr7322muvvfbaa6+9Ppz+C2iPELINj7xKAAAAAElFTkSuQmCC"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="data:image/png;base64,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"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- <div class="Home">
    <h1>Welcome To MentorMate</h1>
   </div> -->


<!--Category container-->
<!--Use the for loop to iterate through the categories-->

<div class="container my-3" id="ques">
    <h2 class="text-center">MentorMate-Browse Categories</h2>
    <div class="row my-3">
        <!-- Fetch all the categories and use a loop to iterate through categories -->
        <?php 
         $sql = "SELECT * FROM `categories`"; 
         $result = mysqli_query($conn, $sql);
         while($row = mysqli_fetch_assoc($result)){
          // echo $row['category_id'];
          // echo $row['category_name'] ;
          $id = $row['category_id'];
          $cat = $row['category_name'];
          $desc = $row['category_description'];
          echo '<div class="col-md-4 my-2">
                  <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?'.$cat.',CET" class="card-img-top" alt="image for this category">
                      <div class="card-body">
                          <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                          <p class="card-text">' . substr($desc, 0, 90). '... </p>
                          <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">Explore</a>
                      </div>
                  </div>
                </div>';
         } 
         ?>

    </div>
</div>
<?php include 'partials/_footer.php'; ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
   
    <script src="//code.tidio.co/9cvu7st40t2n9vysnpmwpe0hovaxo5ot.js" async></script> 
   
  
</body>

</html>