<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $bookCount = Book::count();
        $categoryCount = Category::count();
        $userCount = User::count();

        return view ('admin.dashboard', ['book_count'=> $bookCount, 'category_count'=> $categoryCount, 'user_count'=> $userCount]);
    }
    //controller user
    public function users()
    {
        $users = User::where('roles_id', 2)->where('status', 'active')->get();
        return view ('admin.user', ['users' => $users]);
    }

    public function usersRegistered()
    {
        $usersRegistered = User::where('roles_id', 2)->where('status', 'inactive')->get();
        return view('admin.users-registered', ['usersRegistered' => $usersRegistered]);
    }

    public function usersDetail($slug)
    {
        $user = User::where('slug', $slug)->first();
        return view('admin.user-detail', ['user' => $user]);
    }

    public function usersApprove($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->status = 'active';
        $user->save();
        return redirect('users-detail/'.$slug)->with('status', 'User Approve Successfully');
    }

    public function usersBan($slug)
    {
        $user = User::where('slug', $slug)->first();
        $user->delete();
        return redirect('user')->with('status', 'User Deleted Successfully');
    }

    public function usersBanned()
    {
        $usersBanned = User::onlyTrashed()->get();
        return view('admin.users-banned',['usersBanned' => $usersBanned]);
    }

    public function usersRestore($slug)
    {
        $user = User::withTrashed()->where('slug',$slug)->first();
        $user->restore();
        return redirect('user')->with('status', 'User Restore Successfully');
    }

    //end user controller

    //controller books    
    public function books()
    {
        $book = Book::all();
        return view ('admin.books', ['book'=> $book]);
    }
    
    public function booksAdd()
    {
        $categories = Category::all();
        return view ('admin.book-add', ['categories'=> $categories]);
    }
    
    public function booksStore(Request $request)
    {
        $validated = $request->validate([
            'book_code' => 'required|unique:books',
            'title' => 'required',
        ]);

        $newName = '';
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $book = Book::create($request->all());
        $book->categories()->sync($request->categories);    
        return redirect('books')->with('status', 'Book Added Successfully');
    }

    public function booksEdit($slug)
    {
        $books = Book::where('slug', $slug)->first();
        $categories = Category::all();
        return view('admin.book-edit', ['books' => $books, 'categories' => $categories]);
    }

    public function booksUpdate(Request $request, $slug)
    {
        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $books = Book::where('slug', $slug)->first();
        $books->update($request->all());
        if($request->categories){
            $books->categories()->sync($request->categories);
        }
        return redirect('books')->with('status', 'Book Update Successfully');
    }

    public function booksDestory($slug)
    {
        $buku = Book::where('slug', $slug)->first();
        $buku->delete();
        return back()->with('success', 'Book Deleted Successfully');
    }
    //end book controller

    public function rent()
    {
        return view ('admin.rent');
    }
    
    //controller categories
    public function categories()
    {
        $categories = Category::all();
        return view ('admin.category', ['categories' => $categories]);
    }

    public function categoriesAdd()
    {
       return view('admin.add-category'); 
    }

    public function categoriesStore(Request $request)
    {
        //validate sebuah data masuk atau tidak
        $validate = $request->validate([
            'name' => 'required|unique:categories',
            
        ]);
        //memasukan data ke database kita
        $category = Category::create($request->all());
        return redirect('category')->with('status', 'Category Added Successfully');
    }

    public function categoriesEdit($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('admin.category-edit', ['category' => $category]);
    }

    public function categoriesUpdate(Request $request, $slug)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories',
            
        ]);
        $category = Category::where('slug', $slug)->first();
        $category->slug = null;
        $category ->update($request->all());
        return redirect('category')->with('status', 'Category Update Successfully');
    }

    public function categoriesDestroy($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $category->delete();
        return redirect('category')->with('status', 'Category Deleted Successfully');
    }
}
