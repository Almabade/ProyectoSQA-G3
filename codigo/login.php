<?php include_once 'includes/header.php' ?>

    <?php
        session_start();

        if(isset($_SESSION['datos_usuario'])) {
            header('Location: index.php');
        }
    ?>

    <main>
        <div class="row">
            <div class="col-md-5 p-5 fst-quote-container text-white min-h-100vh">
                <div class="d-flex align-items-center">
                    <img src="assets/img/Logo.png" width=50vw>
                    <h2 class="fw-lighter ms-3 fw-bold mb-0 text-dark">I.E. ALAN TURING</h2>    
                </div>
                <div class="text-quote-login">
                    <div>
                        <svg width="37" height="30" viewBox="0 0 37 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M31.9297 0.632812C33.5703 0.632812 34.3906 0.960938 34.3906 1.61719C34.3906 1.89844 34.1328 2.13281 33.6172 2.32031C29.3047 4.05469 27.1484 7.42969 27.1484 12.4453C27.8047 12.3516 28.2734 12.3047 28.5547 12.3047C34.1797 12.3047 36.9922 15.1172 36.9922 20.7422C36.9922 26.3203 34.1797 29.1094 28.5547 29.1094C22.0391 29.1094 18.7812 25.5234 18.7812 18.3516C18.7812 10.6172 21.8984 5.0625 28.1328 1.6875C29.4453 0.984375 30.7109 0.632812 31.9297 0.632812ZM13.5781 0.84375C15.2188 0.84375 16.0391 1.17188 16.0391 1.82812C16.0391 2.10938 15.7812 2.34375 15.2656 2.53125C10.9531 4.26563 8.79688 7.64063 8.79688 12.6562C9.45312 12.5625 9.92188 12.5156 10.2031 12.5156C15.8281 12.5156 18.6406 15.3281 18.6406 20.9531C18.6406 26.5312 15.8281 29.3203 10.2031 29.3203C3.6875 29.3203 0.429688 25.7344 0.429688 18.5625C0.429688 10.8281 3.54688 5.27344 9.78125 1.89844C11.0938 1.19531 12.3594 0.84375 13.5781 0.84375Z" fill="#DDDDDD"/>
                        </svg>
                        <p class="pt-4 px-5 lh-lg mb-0">
                            El colegio Alan Turing se destaca en Lima por su enfoque educativo altamente personalizado y orientado al estudiante. Nuestra principal meta es moldear individuos integrales, comprometidos, con un fuerte sentido de responsabilidad, empatía y autoconfianza. Fomentamos una pasión inquebrantable por el aprendizaje y promovemos la participación activa de nuestros estudiantes en la comunidad global.
                        </p>
                        <div class="float-end">
                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21 0H33.5V33H0V20.5H21V0Z" fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7 min-h-100vh d-flex align-items-center my-5 my-md-0">
                <div class="container ">
                    <div id="volver" class="d-flex align-items-center mb-5 pointer d-none">
                        <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.8627 2.225L8.37936 0.75L0.137695 9L8.3877 17.25L9.8627 15.775L3.0877 9L9.8627 2.225Z" fill="#001E66"/>
                        </svg>
                
                        <p class="fw-bold mb-0 ms-2 text-secondary">Volver</p>
                    </div>
                    <div class="container mx-lg-5" id="containerLoginPageRight">
                        <div>
                            <h5 class="fs-4" id="titleLoginPage">¡Bienvenido!</h5>
                            <p class="text-secondary" id="textLoginPage">Selecciona el tipo de cuenta al que desea ingresar</p>
                        </div>
                        <div class="row mx-auto" id="containerBtnRoles">
                            <!--Botón Padre-->
                            <div href="#" id="btnAlumno" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded-pill border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="p-3 pb-2 ms-2">
                                    <i class="fs-5 text-white"><img src="assets/img/logo-cuenta-padre.png" width=35vw></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">   
                                    <div>
                                        <p class="fw-bold mb-0" style="color: #001E66">PADRE</p>
                                        <p class="text-secondary fs-6">Cuenta para que los padres puedan gestionar las actividades y reportes de los alumnos.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <!--Botón Docente-->
                            <div href="#" id="btnDocente" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded-pill border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="p-3 pb-2 ms-2">
                                    <i class="fs-5 text-white"><img src="assets/img/logo-cuenta-maestro-admin.png" width=48vw></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0" style="color: #001E66">DOCENTE</p>
                                        <p class="text-secondary fs-6">Cuenta para los profesores de nuestra institución.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div> 
                                </div>
                            </div>
                            <!--Botón Administrador-->
                            <div href="#" id="btnAdmin" class="d-block shadow box-pre-login pointer bg-2nd text-decoration-none text-black rounded-pill border-sacns-ge p-2 d-flex align-items-center mt-4 col-lg-10">
                                <div class="p-3 pb-2 ms-2">
                                    <i class="fs-5 text-white"><img src="assets/img/logo-cuenta-maestro-admin.png" width=48vw></i>
                                </div>
                                <div class="d-flex w-100 justify-content-between align-items-center">
                                    <div>
                                        <p class="fw-bold mb-0" style="color: #001E66">ADMINISTRADOR</p>
                                        <p class="text-secondary fs-6">Cuenta administrativa.</p>
                                    </div>
                                    <div class="pe-3 d-none arrow">
                                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.58927 0.577574C7.26383 0.252137 6.73619 0.252137 6.41075 0.577574C6.08532 0.903011 6.08532 1.43065 6.41075 1.75609L10.8215 6.16683H1.16668C0.70644 6.16683 0.333344 6.53993 0.333344 7.00016C0.333344 7.4604 0.70644 7.8335 1.16668 7.8335H10.8215L6.41075 12.2442C6.08532 12.5697 6.08532 13.0973 6.41075 13.4228C6.73619 13.7482 7.26383 13.7482 7.58927 13.4228L13.4226 7.58942C13.748 7.26398 13.748 6.73634 13.4226 6.41091L7.58927 0.577574Z" fill="#2EBD59"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <form method="POST" class="d-none formulario" action="src/autenticacion.php">
                            <input type="hidden" name="frmname" id="frmname" value=""/>
                            <div class="mb-4">
                                <p class="label-color">ID</p>
                                <input type="text" class="form-control" placeholder="Ingrese su DNI" id="id" name="id"/>
                            </div>
                            <div class="mb-5">
                                <p class="label-color">Contraseña*</p>
                                <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password" />
                            </div>
                            <div class="mt-5">
                                <input type="submit" class="btn btn-colors d-block w-100" value="INGRESAR" id="btnIngresar"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="assets/js/loginLogic.js?v=<?php echo time(); ?>"></script>
<?php include_once 'includes/footer.php' ?>