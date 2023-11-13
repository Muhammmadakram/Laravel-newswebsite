<?php

namespace App\Http\Controllers;
use App\Models\Newsbanner;
use App\Models\Homenews;
use App\Models\Newscateogry;
use App\Models\Author;
use App\Models\Postnews;
use App\Models\Newsflash;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class NewsController extends Controller
{
    public function dashboard()
{

    $newscategories = Newscateogry::all();
    $authors = Author::all();
    $postnews = Postnews::all();

    $postnewsCount = $postnews->count();
    $newscategoriesCount = $newscategories->count();

    $authorsCount = $authors->count();

    return view('dashboard', compact( 'newscategoriesCount', 'authorsCount', 'postnewsCount'));
}


public function newsban()
{
    $banner = Newsbanner::orderBy('created_at', 'desc')->paginate(4);
    return view('newsbanner', compact('banner'));
}


            public function addbanner(Request $request)
            {
                $slider = new Newsbanner;
                $slider->bannertitle = $request->news;
                $image = $request->bannerimage;
                $imagename = time() . '.' . $image->getClientOriginalExtension();
                $request->bannerimage->move('newsbanner', $imagename);
                $slider->bannerimage = $imagename;
                $slider->save();
            }



            public function deletebanner($id)
            {
                   $remove = Newsbanner::find($id);
                   $image_path = public_path('newsbanner/' . $remove->bannerimage);
                   if(file_exists($image_path)){
                      unlink($image_path);
                   }
                   $remove->delete();
               }

            public function pagination(Request $request)
            {
                $banner = Newsbanner::orderBy('created_at', 'desc')->paginate(4);
                return view('pagination_newsbanner', compact('banner'))->render();
            }



public function updatebanner(Request $request)
{
    $id = $request->input('up_id');
    $slider = Newsbanner::find($id);
    $slider->bannertitle = $request->input('up_title');

    // Delete the previous image
    if ($request->hasFile('up_image')) {
    $oldImagePath = public_path('newsbanner/' . $slider->bannerimage);
    if (file_exists($oldImagePath)) {
        unlink($oldImagePath);
    }
    // Upload the new image
        $image = $request->file('up_image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('newsbanner'), $imagename);
        $slider->bannerimage = $imagename;
    }
      else {
        // If the user did not upload a new image, keep the old image
        $slider->bannerimage = $slider->bannerimage;
    }
    $slider->save();

    return response()->json(['success' => true]);
}


            // new home
        public function newshome()
            {
           $homenews = Homenews::orderBy('created_at', 'desc')->paginate(4);
             return view('homenews', compact('homenews'));
            }


                public function paginationhome(Request $request)
            {
         $homenews = Homenews::orderBy('created_at', 'desc')->paginate(4);
             return view('pagination_newshome',compact('homenews'))->render();
             }


            public function addhomenews(Request $request)
             {
             $slider = new Homenews;
                $slider->discription = $request->discription;
                 $image = $request->homeimage;
             $imagename = time() . '.' . $image->getClientOriginalExtension();
                  $request->homeimage->move('homenews', $imagename);
              $slider->image = $imagename;
             $slider->save();
            }

         public function deletehome($id)
        {
           $remove = Homenews::find($id);
           $image_path = public_path('homenews/' . $remove->image);
           if(file_exists($image_path)){
              unlink($image_path);
           }

           $remove->delete();
       }



       public function updatehome(Request $request)
       {
           $id = $request->input('up_id');
           $slider = Homenews::find($id);
           $slider->discription = $request->input('up_des');
          // If the user uploaded a new image, delete the old image
    if ($request->hasFile('up_image')) {
        $oldImagePath = public_path('homenews/' . $slider->image);
        if (file_exists($oldImagePath)) {
            unlink($oldImagePath);
        }

        $image = $request->file('up_image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('homenews'), $imagename);
        $slider->image = $imagename;
    } else {
        // If the user did not upload a new image, keep the old image
        $slider->image = $slider->image;
    }
           $slider->save();
           return response()->json(['success' => true]);

       }





                 public function newscategory()
                 {
                    $news = Newscateogry::orderBy('created_at', 'desc')->paginate(6);
                    return view('newscategory',compact('news'));
                 }


                 public function paginationcategory(Request $request)
                 {
              $news = Newscateogry::orderBy('created_at', 'desc')->paginate(6);
                  return view('pagination_newscategory',compact('news'))->render();
                  }


                 public function addcategory(Request $request)
                 {
                     $slider = new Newscateogry;
                     $slider->newscategory = $request->category;
                     $slider->save();
                 }

                 public function deletecategory($id)
                 {
                        $remove = Newscateogry::find($id);
                        $remove->delete();
                    }


                    public function update_category(Request $request)
                    {
                        $id = $request->input('up_id');
                        $category = $request->input('up_category');
                        $slider = Newscateogry::find($id);
                        $slider->newscategory = $category;
                        $slider->save();
                    }


                            // Author
                 public function author()
                 {
            $author = Author::orderBy('created_at', 'desc')->paginate(4);
                    return view('author',compact('author'));
                 }


                 public function addauthor(Request $request)
                 {
                     $slider = new Author;
                     $slider->author = $request->author;
                     $image = $request->authorimage;
                     $imagename = time() . '.' . $image->getClientOriginalExtension();
                          $request->authorimage->move('Authors', $imagename);
                      $slider->image = $imagename;
                     $slider->save();
                 }


                 public function paginationauthor(Request $request)
                 {
                    $author = Author::orderBy('created_at', 'desc')->paginate(4);
                    return view('pagination_author',compact('author'))->render();
                  }


                  public function deleteauthor($id)
        {
           $remove = Author::find($id);
           $image_path = public_path('Authors/' . $remove->image);
           if(file_exists($image_path)){
              unlink($image_path);
           }
           $remove->delete();
       }



                    public function updateauthor(Request $request)
                {
                            $id = $request->input('up_id');
                            $slider = Author::find($id);
                            $slider->author = $request->input('up_author');
                           // If the user uploaded a new image, delete the old image
                     if ($request->hasFile('author_image')) {
                         $oldImagePath = public_path('Authors/' . $slider->image);
                         if (file_exists($oldImagePath)) {
                             unlink($oldImagePath);
                         }
                         $image = $request->file('author_image');
                         $imagename = time() . '.' . $image->getClientOriginalExtension();
                         $image->move(public_path('Authors'), $imagename);
                         $slider->image = $imagename;
                     } else {
                         // If the user did not upload a new image, keep the old image
                         $slider->image = $slider->image;
                     }
                            $slider->save();
                            return response()->json(['success' => true]);
                 }

                          // Post
                 public function post()
                 {
                    $news = Postnews::orderBy('created_at', 'desc')->paginate(4);
                    $news->load('author'); // Eager load the author relationship
                    return view('post',compact('news'));

                 }




                 public function formpost()
                 {
                    $author = Author::all();
                    $category = Newscateogry::all();
                    return view('formpost',compact('author','category'));
                 }




                 public function addpost(Request $request)
                 {

                    $description = $request->description;

                    // Load the HTML content into a DOMDocument
                    $dom = new DOMDocument();
                    $dom->loadHTML($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

                    // Remove image elements
                    $images = $dom->getElementsByTagName('img');
                    foreach ($images as $img) {
                        $img->parentNode->removeChild($img);
                    }
                    // Save the modified HTML content
                    $description = $dom->saveHTML();

                    $slider = new Postnews;
                 $slider->Title = $request->title;
                 $slider->Category = $request->category;
                 $slider->author_id = $request->author_id; // Assign the author's ID





                 $slider->Description = $description;
                  $image = $request->postimage;
                  $imagename = time() . '.' . $image->getClientOriginalExtension();
                  $request->postimage->move('postnews', $imagename);
                  $slider->Image = $imagename;
                  $slider->save();
                  toast('Added Sucessfully','success');
                  return redirect('/post');
              }

              public function delete_post($id)
              {
                  $post = Postnews::find($id);

                  $image_path = public_path('postnews/' . $post->Image);

                  if(file_exists($image_path)){
                     unlink($image_path);
                  }
            // Delete post from database
               $post->delete();
                return redirect()->back();
              }

              public function updatepost(Request $request,$id)
              {
              $category =  Newscateogry::all();
                $des = Author::all();
                $updatepost = Postnews::find($id);
                return view('updatepost', compact('updatepost','des','category'));
              }

              public function update_post(Request $request, $id)
              {
                $description = $request->description;

    // Load the HTML content into a DOMDocument
    $dom = new DOMDocument();

    // Disable error reporting for invalid HTML
    libxml_use_internal_errors(true);

    // Load the HTML content with error handling
    if ($description) {
        $dom->loadHTML($description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    }

    // Clear any previous errors
    libxml_clear_errors();

    // Remove image elements
    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $img->parentNode->removeChild($img);
    }

    // Save the modified HTML content
    $description = $dom->saveHTML();

                  $slider = Postnews::find($id);
                  $slider->Title = $request->title;
                  $slider->Category = $request->category;
                  $slider->author_id = $request->author_id;
                  $slider->Description = $description;

                  if ($request->hasFile('postimage')) {
                      // Delete the previous image file
                      $previousImage = $slider->Image;
                      if ($previousImage) {
                          $imagePath = public_path('postnews/' . $previousImage);
                          if (file_exists($imagePath)) {
                              unlink($imagePath);
                          }
                      }

                      // Upload and save the new image file
                      $image = $request->file('postimage');
                      $imagename = time() . '.' . $image->getClientOriginalExtension();
                      $image->move(public_path('postnews'), $imagename);
                      $slider->Image = $imagename;
                  }

                  $slider->save();

                  toast('Updated Successfully', 'success');
                  return redirect('/post');
              }


                    // Newsflash


           public function newsflash()
           {
            $items = Newsflash::orderBy('created_at','desc')->paginate(7);
               return view('newsflash',compact('items'));
           }

            public function pagination_flash(Request $request)
                 {
                    $items = Newsflash::orderBy('created_at', 'desc')->paginate(7);
                    return view('pagination_flash',compact('items'))->render();
                  }

            public function addflash(Request $request)
               {
                    $sl = new Newsflash;
                     $sl->newsflash = $request->newsflash;
                     $sl->save();  
               }




         public function deleteflash($id)
         {
            $remove = Newsflash::find($id);
            $remove->delete();
         }

       public function update_flash(Request $request)
            {
               $id = $request->input('up_id');
              $slide = Newsflash::find($id);
              $slide->newsflash = $request->up_flash;
             $slide->save();
                    }

}
