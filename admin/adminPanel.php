<header class="header">
  <div class="container">
    <div class="header__inner">
      <a href="/home"><h1 class="title">Escape.<span>author</span></h1></a>
      <div class="accout-elems">
        <div class="account">
          <p class="account-first-name"></p>
        </div>
        <form method="POST" action="/admin" class='logout'>
          <button class="exit-btn" type="submit">
            <img src="/static/imgs/log-out.svg" alt="logout" class="log-out">
          </button>
        </form>
      </div>
    </div>
  </div>
</header>

<main class="main">
  <form class="send-form" name="sendForm">
    <section class="new-post">
      <div class="container">
        <div class="new-post__inner">
          <div class="new-post--texts">
            <h2 class="new-post--title">New Post</h2>
            <p class="new-post--subtitle">Fill out the form bellow and publish your article</p>
          </div>
          <button name="publishButton" class="new-post--button">Publish</button>
        </div>
      </div>
    </section>

    <div class="showIsPublish">
      <div class="container">
        <div class="form_errors">
          <object class="alert-circle" data="/static/imgs/alert-circle.svg" type="image/svg+xml"></object>
          <p class="error-text"></p>
        </div>
        <div class="from-correct">
          <object class="alert-circle" data="/static/imgs/check-circle.svg" type="image/svg+xml"></object>
          <p class="correct-text">Publish Complete!</p>
        </div>
      </div>
    </div>

    <section class="crete-post">
      <div class="container">
        <div class="main-info">
          <h2 class="main-info__title">Main Information</h2>
          <div class="main-info__inner">
            <div class="main-info__form">
              <div class="Title-input">
                <label for="Title">Title</label>
                <input type="text" id="Title" name="Title" autocomplete="off">
                <p class="error-form--text" data-error="Title">Title is required.</p>
              </div>
              <div class="Description-input">
                <label for="Description">Short description</label>
                <input type="text" id="Description" name="Description" autocomplete="off">
                <p class="error-form--text" data-error="Description">Description is required.</p>
              </div>
              <div class="Author-input">
                <label for="Author">Author name</label>
                <input type="text" id="Author" name="Author" autocomplete="off">
                <p class="error-form--text" data-error="Author">Author name is required.</p>
              </div>
              <div class="author-photos">
                <label for="AuthorPhoto">Author Photo</label>
                <div class="authorPhoto__inner">
                  <div class="author-img">
                    <img class="author-img-output" src="data:," alt>
                    <object class="none-author-img" data="/static/imgs/camera.svg" type="image/svg+xml"></object>
                  </div>
                  <input type="file" id="AuthorPhoto" name="AuthorPhoto" accept=".jpg, .jpeg, .gif, .png" >
                  <div>
                    <p class="author-upload">Upload</p>
                    <div class="changeImg-author">
                      <div class="changeImg-author__upload changeImg-upload">
                        <object data="/static/imgs/camera.svg" type="image/svg+xml"></object>
                        <p>Upload New</p>
                      </div>
                      <div class="changeImg-author__remove changeImg-remove">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M8.93934 2.93934C9.22064 2.65804 9.60218 2.5 10 2.5H14C14.3978 2.5 14.7794 2.65804 15.0607 2.93934C15.342 3.22064 15.5 3.60218 15.5 4V5.5H8.5V4C8.5 3.60218 8.65804 3.22064 8.93934 2.93934ZM7.5 5.5V4C7.5 3.33696 7.76339 2.70107 8.23223 2.23223C8.70107 1.76339 9.33696 1.5 10 1.5H14C14.663 1.5 15.2989 1.76339 15.7678 2.23223C16.2366 2.70107 16.5 3.33696 16.5 4V5.5H19H21C21.2761 5.5 21.5 5.72386 21.5 6C21.5 6.27614 21.2761 6.5 21 6.5H19.5V20C19.5 20.663 19.2366 21.2989 18.7678 21.7678C18.2989 22.2366 17.663 22.5 17 22.5H7C6.33696 22.5 5.70107 22.2366 5.23223 21.7678C4.76339 21.2989 4.5 20.663 4.5 20V6.5H3C2.72386 6.5 2.5 6.27614 2.5 6C2.5 5.72386 2.72386 5.5 3 5.5H5H7.5ZM5.5 6.5H8H16H18.5V20C18.5 20.3978 18.342 20.7794 18.0607 21.0607C17.7794 21.342 17.3978 21.5 17 21.5H7C6.60218 21.5 6.22064 21.342 5.93934 21.0607C5.65804 20.7794 5.5 20.3978 5.5 20V6.5ZM10 10.5C10.2761 10.5 10.5 10.7239 10.5 11V17C10.5 17.2761 10.2761 17.5 10 17.5C9.72386 17.5 9.5 17.2761 9.5 17V11C9.5 10.7239 9.72386 10.5 10 10.5ZM14.5 11C14.5 10.7239 14.2761 10.5 14 10.5C13.7239 10.5 13.5 10.7239 13.5 11V17C13.5 17.2761 13.7239 17.5 14 17.5C14.2761 17.5 14.5 17.2761 14.5 17V11Z" fill="#E86961"/>
                        </svg>
                        <p>Remove</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="PublishDate-input">
                <label for="PublishDate">Publish Date</label>
                <input type="date" id="PublishDate" name="PublishDate" >
                <p class="error-form--text" data-error="publishDate"></p>
              </div>
              <div class="showHeroImages">
                <div class="showHeroImages-max">
                  <label for="HeroImage">Hero Image</label>
                  <div class="HeroImage">
                    <input type="file" name="HeroImage" id="HeroImage" accept=".png, .jpeg, .gif" >
                    <div class="HeroImage-file first">
                      <img class="HeroImage-output" src="data:," alt>
                      <svg class="none-HeroImage" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <p class="Upload-HeroImage-sec">Upload</p>
                    </div>
                  </div>
                  <p class="HeroImage-size">Size up to 10mb. Format: png, jpeg, gif.</p>
                  <div class="changeImg">
                    <div class="changeImg-upload">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <p>Upload New</p>
                    </div>
                    <div class="changeImg-remove">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.93934 2.93934C9.22064 2.65804 9.60218 2.5 10 2.5H14C14.3978 2.5 14.7794 2.65804 15.0607 2.93934C15.342 3.22064 15.5 3.60218 15.5 4V5.5H8.5V4C8.5 3.60218 8.65804 3.22064 8.93934 2.93934ZM7.5 5.5V4C7.5 3.33696 7.76339 2.70107 8.23223 2.23223C8.70107 1.76339 9.33696 1.5 10 1.5H14C14.663 1.5 15.2989 1.76339 15.7678 2.23223C16.2366 2.70107 16.5 3.33696 16.5 4V5.5H19H21C21.2761 5.5 21.5 5.72386 21.5 6C21.5 6.27614 21.2761 6.5 21 6.5H19.5V20C19.5 20.663 19.2366 21.2989 18.7678 21.7678C18.2989 22.2366 17.663 22.5 17 22.5H7C6.33696 22.5 5.70107 22.2366 5.23223 21.7678C4.76339 21.2989 4.5 20.663 4.5 20V6.5H3C2.72386 6.5 2.5 6.27614 2.5 6C2.5 5.72386 2.72386 5.5 3 5.5H5H7.5ZM5.5 6.5H8H16H18.5V20C18.5 20.3978 18.342 20.7794 18.0607 21.0607C17.7794 21.342 17.3978 21.5 17 21.5H7C6.60218 21.5 6.22064 21.342 5.93934 21.0607C5.65804 20.7794 5.5 20.3978 5.5 20V6.5ZM10 10.5C10.2761 10.5 10.5 10.7239 10.5 11V17C10.5 17.2761 10.2761 17.5 10 17.5C9.72386 17.5 9.5 17.2761 9.5 17V11C9.5 10.7239 9.72386 10.5 10 10.5ZM14.5 11C14.5 10.7239 14.2761 10.5 14 10.5C13.7239 10.5 13.5 10.7239 13.5 11V17C13.5 17.2761 13.7239 17.5 14 17.5C14.2761 17.5 14.5 17.2761 14.5 17V11Z" fill="#E86961"/>
                      </svg>
                      <p>Remove</p>
                    </div>
                  </div>
                </div>
                <div class="showHeroImages-min">
                  <div class="HeroImage">
                    <input type="file" name="HeroImageSec" id="HeroImageSec" class="second-HeroImage" accept=".png, .jpeg, .gif" >
                    <div class="HeroImage-file second">
                    <img class="HeroImage-output-sec" src="data:," alt>
                      <svg class="none-HeroImage-sec" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z" stroke="black" stroke-linecap5304="round" stroke-linejoin="round"/>
                        <path d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <p class="Upload-HeroImage">Upload</p>
                    </div>
                  </div>
                  <p class="HeroImage-size">Size up to 10mb. Format: png, jpeg, gif.</p>
                  <div class="changeImg">
                    <div class="changeImg-upload">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19C23 19.5304 22.7893 20.0391 22.4142 20.4142C22.0391 20.7893 21.5304 21 21 21H3C2.46957 21 1.96086 20.7893 1.58579 20.4142C1.21071 20.0391 1 19.5304 1 19V8C1 7.46957 1.21071 6.96086 1.58579 6.58579C1.96086 6.21071 2.46957 6 3 6H7L9 3H15L17 6H21C21.5304 6 22.0391 6.21071 22.4142 6.58579C22.7893 6.96086 23 7.46957 23 8V19Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M12 17C14.2091 17 16 15.2091 16 13C16 10.7909 14.2091 9 12 9C9.79086 9 8 10.7909 8 13C8 15.2091 9.79086 17 12 17Z" stroke="black" stroke-linecap="round" stroke-linejoin="round"/>
                      </svg>
                      <p>Upload New</p>
                    </div>
                    <div class="changeImg-remove">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M8.93934 2.93934C9.22064 2.65804 9.60218 2.5 10 2.5H14C14.3978 2.5 14.7794 2.65804 15.0607 2.93934C15.342 3.22064 15.5 3.60218 15.5 4V5.5H8.5V4C8.5 3.60218 8.65804 3.22064 8.93934 2.93934ZM7.5 5.5V4C7.5 3.33696 7.76339 2.70107 8.23223 2.23223C8.70107 1.76339 9.33696 1.5 10 1.5H14C14.663 1.5 15.2989 1.76339 15.7678 2.23223C16.2366 2.70107 16.5 3.33696 16.5 4V5.5H19H21C21.2761 5.5 21.5 5.72386 21.5 6C21.5 6.27614 21.2761 6.5 21 6.5H19.5V20C19.5 20.663 19.2366 21.2989 18.7678 21.7678C18.2989 22.2366 17.663 22.5 17 22.5H7C6.33696 22.5 5.70107 22.2366 5.23223 21.7678C4.76339 21.2989 4.5 20.663 4.5 20V6.5H3C2.72386 6.5 2.5 6.27614 2.5 6C2.5 5.72386 2.72386 5.5 3 5.5H5H7.5ZM5.5 6.5H8H16H18.5V20C18.5 20.3978 18.342 20.7794 18.0607 21.0607C17.7794 21.342 17.3978 21.5 17 21.5H7C6.60218 21.5 6.22064 21.342 5.93934 21.0607C5.65804 20.7794 5.5 20.3978 5.5 20V6.5ZM10 10.5C10.2761 10.5 10.5 10.7239 10.5 11V17C10.5 17.2761 10.2761 17.5 10 17.5C9.72386 17.5 9.5 17.2761 9.5 17V11C9.5 10.7239 9.72386 10.5 10 10.5ZM14.5 11C14.5 10.7239 14.2761 10.5 14 10.5C13.7239 10.5 13.5 10.7239 13.5 11V17C13.5 17.2761 13.7239 17.5 14 17.5C14.2761 17.5 14.5 17.2761 14.5 17V11Z" fill="#E86961"/>
                      </svg>
                      <p>Remove</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div>
              <div class="article-preview">
                <p class="article-preview__text">Article preview</p>
                <div class="article-preview__laptop">
                  <div class="article-preview__screen">
                    <div class="article-preview__screen-span">
                      <span></span><span></span><span></span>
                    </div>
                    <div class="article-preview__screen-text">
                      <h3 class="screen-text-title">New Post</h3>
                      <p  class="screen-text-subtitle">Please, enter any description</p>
                    </div>
                    <div class="screen-text-image">
                      <img class="screen-text-image-output" src="data:," alt>
                    </div>
                  </div>
                </div>
              </div>
              <div class="post-preview">
                <p class="post-preview__text">Post card preview</p>
                <div>
                  <div class="post-preview__laptop">
                    <div class="post-preview__screen">
                      <div class="post-preview__image">
                        <img class="post-preview__image-output" src="data:," alt>
                      </div>
                      <div class="post-preview__inner">
                        <h3 class="post-preview__title">New Post</h3>
                        <p class="post-preview__subtitle">Please, enter any description</p>
                        <div class="post-preview__info">
                          <div class="post-preview__info-main">
                            <div class="post-preview__author-image">
                              <img class="preview__author-image" src="data:," alt>
                            </div>
                            <p class="post-preview__author-text">Enter author name</p>
                          </div>
                          <p class="post-preview__author-date">4/19/2023</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="textarea">
      <div class="container">
        <div class="textarea__inner">
          <h2 class="textarea-title">Content</h2>
          <div class="textarea-main">
            <label class="textarea-subtitle" for="Content">Post content (plain text)</label>
            <textarea " name="Content" id="Content" cols="30" rows="10" placeholder="Type anything you want..."></textarea>
            <p class="error-form--text" data-error="Content">Content is required.</p>
          </div>
        </div>
      </div>
    </section>
  </form>
</main>
<script type="module" src="./js/adminPanel.js"></script>
