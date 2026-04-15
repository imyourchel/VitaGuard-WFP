<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Doctor;
use App\Models\Transaction;
use App\Models\Category;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function members()
    {
        $members = Member::with('user')->get();
        return view('admin.member', compact('members'));
    }

    public function doctors()
    {
        $doctors = Doctor::with('user')->get();
        return view('admin.doctors.index', compact('doctors'));
    }

    public function transactions()
    {
        $transactions = Transaction::with('member', 'member.user', 'service', 'doctor', 'doctor.user')->get();
        return view('admin.transactions.index', compact('transactions'));
    }

    public function categories()
    {
        $categories = Category::all();
        return view('admin.kategori', compact('categories'));
    }
}
