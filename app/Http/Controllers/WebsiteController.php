<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
     public function Home()
    {
        return view('web.home');
    }
    public function selectionTopics()
    {
        return view('web.selection_of_topics');
    }
    public function researchProposalWriting()
    {
        return view('web.research_proposal_writing');
    }
    public function researchPaperWriting()
    {
        return view('web.research_paper_writing');
    }
    public function synopsisWriting()
    {
        return view('web.synopsis_writing');
    }
    public function dissertation()
    {
        return view('web.dissertation');
    }
    public function thesisWriting()
    {
        return view('web.thesis_writing');
    }
    public function formattingService()
    {
        return view('web.formatting_service');
    }
    public function synopsisFormatting()
    {
        return view('web.synopsis_formatting');
    }
    public function thesisFormatting()
    {
        return view('web.thesis_formatting');
    }
    public function dissertationFormatting()
    {
        return view('web.dissertation_formatting');
    }
    public function implementation()
    {
        return view('web.implementation');
    }
    public function literatureReview()
    {
        return view('web.literature_review');
    }
    public function systematicLiteratureReview()
    {
        return view('web.systematic_literature_review');
    }
    public function researchMethodology()
    {
        return view('web.research_methodology');
    }
    public function sampling()
    {
        return view('web.sampling');
    }
    public function qualitativeMethodology()
    {
        return view('web.qualitative_methodology');
    }
    public function quantitativeMethodology()
    {
        return view('web.quantitative_methodology');
    }
    public function dataCollection()
    {
        return view('web.data_collection');
    }
    public function primaryDataCollection()
    {
        return view('web.primary_data_collection');
    }
}
