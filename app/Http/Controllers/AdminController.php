<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\Doctor;
use App\Models\Transaction;
use App\Models\Category;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard
     */
    public function index()
    {
        return view('admin.index');
    }

    /**
     * Display members list
     */
    public function members()
    {
        $members = Member::with('user')->get();
        return view('admin.member', compact('members'));
    }

    /**
     * Display doctors list
     */
    public function doctors()
    {
        $doctors = Doctor::with('user')->get();
        return view('admin.doctor', compact('doctors'));
    }

    /**
     * Display transactions list
     */
    public function order()
    {
        $transactions = Transaction::with('member', 'member.user', 'service', 'doctor', 'doctor.user')->get();
        return view('admin.transaksi', compact('transactions'));
    }

    /**
     * Display categories list
     */
    public function categories()
    {
        $categories = Category::all();
        return view('admin.kategori', compact('categories'));
    }
}
