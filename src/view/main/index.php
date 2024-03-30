<?php include '../partial/header.html' ?>
  <!-- BODY SECTION -->
  <section class="w-full pt-4 px-1.5 md:px-4 mt-[10rem] md:mt-[9rem] md:relative">
    <div class="w-full h-full flex gap-1">
      <!-- 
        =================================================================================================================
        =========================================== IMAGES MODALS =======================================================
        =================================================================================================================
       -->
      <!-- Scroll container -->
      <div id="current-image" class="fixed hidden opacity-0 pointer-events-none z-50 w-full top-0 h-full left-0 px-2 pt-12 pb-4 md:pb-0 bg-slate-900/30 backdrop-blur-sm transition-all duration-50 ease-in overflow-y-scroll scrollbar-none">
        <div id="current-image-container" class="current-image-container w-full md:w-[70vw] mx-auto flex flex-col gap-0.5 bg-slate-50 rounded-md shadow-xl shadow-slate-200/70">
          <!-- the current image -->
          <div class="w-full bg-gray-300/70">
            <div class="w-full h-[30rem] md:h-[40rem] flex items-center justify-center bg-contain bg-no-repeat bg-center"
              style="background-image: url('../../../public/img/post/IMG_20240328_182037_948.jpg') ;">
              <!-- Image div -->
            </div>
          </div>
          
          <!-- the buttons -->
          <div class="flex gap-2 flex-row items-center justify-between md:justify-end px-2 mt-1">
            <p class="font-semibold text-base md:text-lg absolute mt-12 md:mt-14"><span>100</span> Likes</p>
            <div class="flex gap-2">
              <button id="likePost" class="btn">
                <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#1C274C" stroke-width="1.9200000000000004">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                      fill="#ff0000"></path>
                  </g>
                </svg>
              </button>
              <a href="#comment-section" id="comment" class="btn">
                <svg width="2rem" height="2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#1C274C" stroke-width="1.512">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                      d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.5997 2.37562 15.1116 3.04346 16.4525C3.22094 16.8088 3.28001 17.2161 3.17712 17.6006L2.58151 19.8267C2.32295 20.793 3.20701 21.677 4.17335 21.4185L6.39939 20.8229C6.78393 20.72 7.19121 20.7791 7.54753 20.9565C8.88837 21.6244 10.4003 22 12 22ZM8 13.25C7.58579 13.25 7.25 13.5858 7.25 14C7.25 14.4142 7.58579 14.75 8 14.75H13.5C13.9142 14.75 14.25 14.4142 14.25 14C14.25 13.5858 13.9142 13.25 13.5 13.25H8ZM7.25 10.5C7.25 10.0858 7.58579 9.75 8 9.75H16C16.4142 9.75 16.75 10.0858 16.75 10.5C16.75 10.9142 16.4142 11.25 16 11.25H8C7.58579 11.25 7.25 10.9142 7.25 10.5Z"
                      fill="#ffffff"></path>
                  </g>
                </svg>
              </a>
            </div>
            <div class="flex">
              <a href="../../../public/img/post/IMG_20240328_181401_427.jpg" download id="downloadPost" class="justify-self-end self-end btn">
                <svg width="1.88rem" height="1.88rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#1C274C" stroke-width="1.176">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M12.5535 16.5061C12.4114 16.6615 12.2106 16.75 12 16.75C11.7894 16.75 11.5886 16.6615 11.4465 16.5061L7.44648 12.1311C7.16698 11.8254 7.18822 11.351 7.49392 11.0715C7.79963 10.792 8.27402 10.8132 8.55352 11.1189L11.25 14.0682V3C11.25 2.58579 11.5858 2.25 12 2.25C12.4142 2.25 12.75 2.58579 12.75 3V14.0682L15.4465 11.1189C15.726 10.8132 16.2004 10.792 16.5061 11.0715C16.8118 11.351 16.833 11.8254 16.5535 12.1311L12.5535 16.5061Z"
                      fill="#1C274C"></path>
                    <path
                      d="M3.75 15C3.75 14.5858 3.41422 14.25 3 14.25C2.58579 14.25 2.25 14.5858 2.25 15V15.0549C2.24998 16.4225 2.24996 17.5248 2.36652 18.3918C2.48754 19.2919 2.74643 20.0497 3.34835 20.6516C3.95027 21.2536 4.70814 21.5125 5.60825 21.6335C6.47522 21.75 7.57754 21.75 8.94513 21.75H15.0549C16.4225 21.75 17.5248 21.75 18.3918 21.6335C19.2919 21.5125 20.0497 21.2536 20.6517 20.6516C21.2536 20.0497 21.5125 19.2919 21.6335 18.3918C21.75 17.5248 21.75 16.4225 21.75 15.0549V15C21.75 14.5858 21.4142 14.25 21 14.25C20.5858 14.25 20.25 14.5858 20.25 15C20.25 16.4354 20.2484 17.4365 20.1469 18.1919C20.0482 18.9257 19.8678 19.3142 19.591 19.591C19.3142 19.8678 18.9257 20.0482 18.1919 20.1469C17.4365 20.2484 16.4354 20.25 15 20.25H9C7.56459 20.25 6.56347 20.2484 5.80812 20.1469C5.07435 20.0482 4.68577 19.8678 4.40901 19.591C4.13225 19.3142 3.9518 18.9257 3.85315 18.1919C3.75159 17.4365 3.75 16.4354 3.75 15Z"
                      fill="#1C274C"></path>
                  </g>
                </svg>
              </a>
            </div>
          </div>
          <!-- For sub content -->
          <div class="w-full px-1 md:px-2 mt-4">
            <!-- ==================================== Related Post ==================================== -->
            <section class="w-full flex flex-col border-b-2 border-gray-400/60 pb-4">
              <h1 class="text-2xl font-bold">Related Gallery</h1>
              <div class="flex flex-wrap justify-center gap-1 md:gap-3 mt-2">
                <!-- Related Gallery section -->
                <div class="w-[40vw] h-[20vh] md:w-[15rem] md:h-[10rem] bg-cover bg-no-repeat bg-center rounded-md "
                  style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
                  <div id="related-gallery-image"
                    class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
                    <!-- for the like buttons -->
                    <button id="likePost" class="btn">
                      <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        stroke="#ffff" stroke-width="1.9200000000000004">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                          <path
                            d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                            fill="#ffffff00">
                            <!-- change the fill into red (#ff0000) -->
                          </path>
                        </g>
                      </svg>
                    </button>
                  </div>
                </div>
                <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary images start !!!!!!!!!!!!!!!!!!! -->
                  <div class="w-[40vw] h-[20vh] md:w-[15rem] md:h-[10rem] bg-cover bg-no-repeat bg-center rounded-md "
                    style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
                    <div id="related-gallery-image"
                      class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
                      <!-- for the like buttons -->
                      <button id="likePost" class="btn">
                        <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                          stroke="#ffff" stroke-width="1.9200000000000004">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path
                              d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                              fill="#ffffff00">
                              <!-- change the fill into red (#ff0000) -->
                            </path>
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="w-[40vw] h-[20vh] md:w-[15rem] md:h-[10rem] bg-cover bg-no-repeat bg-center rounded-md "
                    style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
                    <div id="related-gallery-image"
                      class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
                      <!-- for the like buttons -->
                      <button id="likePost" class="btn">
                        <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                          stroke="#ffff" stroke-width="1.9200000000000004">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path
                              d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                              fill="#ffffff00">
                              <!-- change the fill into red (#ff0000) -->
                            </path>
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="w-[40vw] h-[20vh] md:w-[15rem] md:h-[10rem] bg-cover bg-no-repeat bg-center rounded-md "
                    style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
                    <div id="related-gallery-image"
                      class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
                      <!-- for the like buttons -->
                      <button id="likePost" class="btn">
                        <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                          stroke="#ffff" stroke-width="1.9200000000000004">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path
                              d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                              fill="#ffffff00">
                              <!-- change the fill into red (#ff0000) -->
                            </path>
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="w-[40vw] h-[20vh] md:w-[15rem] md:h-[10rem] bg-cover bg-no-repeat bg-center rounded-md "
                    style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
                    <div id="related-gallery-image"
                      class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
                      <!-- for the like buttons -->
                      <button id="likePost" class="btn">
                        <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                          stroke="#ffff" stroke-width="1.9200000000000004">
                          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                          <g id="SVGRepo_iconCarrier">
                            <path
                              d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                              fill="#ffffff00">
                              <!-- change the fill into red (#ff0000) -->
                            </path>
                          </g>
                        </svg>
                      </button>
                    </div>
                  </div>
                <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary images end !!!!!!!!!!!!!!!!!!! -->
              </div>
              <div class="mx-auto self-center">
                <button class="border-2 btn py-3 px-6 border-slate-900 my-4 font-semibold text-base md:text-xl rounded-md transition-all duration-75 ease-out">
                  See More
                </button>
              </div>
            </section>
            <!-- ==================================== COMMENT SECTION ==================================== -->
            <section class="w-full flex flex-col">
              <h1 class="text-2xl font-bold">Comments</h1>
              <div id="comment-section" class="bg-gray-200/70 p-2 rounded-lg mx-1 md:mx-3 mt-2 gap-2 flex flex-col  flex-wrap">
                <!-- the comments -->
                <div class="flex flex-col flex-wrap">
                  <div class="flex justify-between">
                    <!-- comment profile -->
                    <div class="flex gap-2 items-center">
                      <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                      <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                    </div>
                    <div>
                      <a href="">
                        <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                      </a>
                    </div>
                  </div>
                  <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                    quod quod quod quod quod quod quod quod quod quod quod quod quod
                  </p>
                  <!-- divider -->
                  <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                </div>
                <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary Comment start !!!!!!!!!!!!!!!!!!! -->
                  <div class="flex flex-col flex-wrap">
                    <div class="flex justify-between">
                      <!-- comment profile -->
                      <div class="flex gap-2 items-center">
                        <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                        <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                      </div>
                      <div>
                        <a href="">
                          <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                        </a>
                      </div>
                    </div>
                    <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                      quod quod quod quod quod quod quod quod quod quod quod quod quod
                    </p>
                    <!-- divider -->
                    <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                  </div>
                  <div class="flex flex-col flex-wrap">
                    <div class="flex justify-between">
                      <!-- comment profile -->
                      <div class="flex gap-2 items-center">
                        <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                        <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                      </div>
                      <div>
                        <a href="">
                          <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                        </a>
                      </div>
                    </div>
                    <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                      quod quod quod quod quod quod quod quod quod quod quod quod quod
                    </p>
                    <!-- divider -->
                    <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                  </div>
                  <div class="flex flex-col flex-wrap">
                    <div class="flex justify-between">
                      <!-- comment profile -->
                      <div class="flex gap-2 items-center">
                        <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                        <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                      </div>
                      <div>
                        <a href="">
                          <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                        </a>
                      </div>
                    </div>
                    <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                      quod quod quod quod quod quod quod quod quod quod quod quod quod
                    </p>
                    <!-- divider -->
                    <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                  </div>
                  <div class="flex flex-col flex-wrap">
                    <div class="flex justify-between">
                      <!-- comment profile -->
                      <div class="flex gap-2 items-center">
                        <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                        <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                      </div>
                      <div>
                        <a href="">
                          <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                        </a>
                      </div>
                    </div>
                    <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                      quod quod quod quod quod quod quod quod quod quod quod quod quod
                    </p>
                    <!-- divider -->
                    <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                  </div>
                  <div class="flex flex-col flex-wrap">
                    <div class="flex justify-between">
                      <!-- comment profile -->
                      <div class="flex gap-2 items-center">
                        <div class="bg-slate-700 w-8 h-8 md:w-10 md:h-10 rounded-full"></div>
                        <p class="text-sm font-semibold md:text-base">Zharif Aziz Zulkarnain Widodo</p>
                      </div>
                      <div>
                        <a href="">
                          <svg width="1.6rem" height="1.6rem" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>Trash</title> <g id="Page-1" stroke-width="1.08" fill="none" fill-rule="evenodd"> <g id="Trash"> <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="24" height="24"> </rect> <path d="M6,6 L6.96683,19.5356 C6.98552,19.7973 7.20324,20 7.46556,20 L16.5344,20 C16.7968,20 17.0145,19.7973 17.0332,19.5356 L18,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> <line x1="4" y1="6" x2="20" y2="6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="10" y1="10" x2="10" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <line x1="14" y1="10" x2="14" y2="16" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </line> <path d="M15,6 C15,4.34315 13.6569,3 12,3 C10.3431,3 9,4.34315 9,6" id="Path" stroke="#e75a5a" stroke-width="1.08" stroke-linecap="round"> </path> </g> </g> </g></svg>
                        </a>
                      </div>
                    </div>
                    <p class="text-gray-700 text-sm text-justify md:px-2 mt-0.5">
                      Lorem ipsum dolor sit amet consectetur adipisicing elit.
                      Quisquam quaerat quidem quibusdam quod, quod, quod, quod, quod, quod
                      quod quod quod quod quod quod quod quod quod quod quod quod quod
                    </p>
                    <!-- divider -->
                    <div class="h-[1.4px] w-full bg-gray-400/70 rounded-full mt-2"></div>
                  </div>
                <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary Comments end !!!!!!!!!!!!!!!!!!! -->
              </div>
              <div class="mx-auto self-center">
                <button class="border-2 btn py-3 px-6 border-slate-900 my-4 font-semibold text-base md:text-xl rounded-md transition-all duration-75 ease-out">
                  More comments 
                </button>
              </div>
            </section>
          </div>
          <!-- scroll container end -->
        </div>
      </div>
      <!-- 
        =================================================================================================================
        ============================================ GALLERY FEED =======================================================
        =================================================================================================================
       -->
      <!-- gallery collective -->
      <div class="w-full flex gap-2 flex-row flex-wrap justify-center">
        <!-- gallery images -->
        <div class="w-full h-[30vh] md:w-[22rem] md:h-[15rem] bg-cover bg-no-repeat bg-center rounded-md "
          style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
          <div id="gallery-image"
            class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
            <!-- for the like buttons -->
            <button id="likePost" class="btn">
              <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                stroke="#ffff" stroke-width="1.9200000000000004">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                  <path
                    d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                    fill="#ffffff00">
                    <!-- change the fill into red (#ff0000) -->
                  </path>
                </g>
              </svg>
            </button>
          </div>
        </div>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary gallery image start !!!!!!!!!!!!!!!!!!! -->
          <div class="w-full h-[30vh] md:w-[22rem] md:h-[15rem] bg-cover bg-no-repeat bg-center rounded-md "
            style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
            <div id="gallery-image"
              class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
              <!-- for the like buttons -->
              <button id="likePost" class="btn">
                <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#ffff" stroke-width="1.9200000000000004">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                      fill="#ffffff00">
                      <!-- change the fill into red (#ff0000) -->
                    </path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          <div class="w-full h-[30vh] md:w-[22rem] md:h-[15rem] bg-cover bg-no-repeat bg-center rounded-md "
            style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
            <div id="gallery-image"
              class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
              <!-- for the like buttons -->
              <button id="likePost" class="">
                <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#ffff" stroke-width="1.9200000000000004">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                      fill="#ffffff00">
                      <!-- change the fill into red (#ff0000) -->
                    </path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
          <div class="w-full h-[30vh] md:w-[22rem] md:h-[15rem] bg-cover bg-no-repeat bg-center rounded-md "
            style="background-image: url('../../../public/img/post/IMG_20240328_181609_800.jpg');">
            <div id="gallery-image"
              class="w-full h-full p-0.5 opacity-0 hover:opacity-100 bg-slate-950/10 transition-all duration-300 ease-out">
              <!-- for the like buttons -->
              <button id="likePost" class="">
                <svg width="2.2rem" height="2.2rem" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                  stroke="#ffff" stroke-width="1.9200000000000004">
                  <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                  <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                  <g id="SVGRepo_iconCarrier">
                    <path
                      d="M2 9.1371C2 14 6.01943 16.5914 8.96173 18.9109C10 19.7294 11 20.5 12 20.5C13 20.5 14 19.7294 15.0383 18.9109C17.9806 16.5914 22 14 22 9.1371C22 4.27416 16.4998 0.825464 12 5.50063C7.50016 0.825464 2 4.27416 2 9.1371Z"
                      fill="#ffffff00">
                      <!-- change the fill into red (#ff0000) -->
                    </path>
                  </g>
                </svg>
              </button>
            </div>
          </div>
        <!-- !!!!!!!!!!!!!!!!!!!!!!!!! Temporary gallery image end !!!!!!!!!!!!!!!!!!! -->
      </div>
    </div>
    <script src="main.js"></script>
  </section>
<?php include '../partial/footer.html' ?>