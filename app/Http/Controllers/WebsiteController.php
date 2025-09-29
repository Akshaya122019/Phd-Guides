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
    public function secondaryDataCollection()
    {
        return view('web.secondary_data_collection');
    }
    public function assistance()
    {
        return view('web.assistance');
    }
    public function sciJournal()
    {
        return view('web.sci_journal');
    }
    public function scopusIndexed()
    {
        return view('web.scopus_indexed');
    }
    public function q1Journal()
    {
        return view('web.q1_journal');
    }
    public function ugcJournal()
    {
        return view('web.ugc_journal');
    }
    public function webOfScience()
    {
        return view('web.web_of_science');
    }
    public function isiJournal()
    {
        return view('web.isi_journal');
    }
    public function igiJournal()
    {
        return view('web.igi_journal');
    }
    public function AnnotatedBibilography()
    {
        return view('web.annotated_bibilography');
    }
    public function plagarismRemoval()
    {
        return view('web.plagarism_removal');
    }
    public function dataAnalysis()
    {
        return view('web.data_analysis');
    }
    public function qualitativeDataAnalysis()
    {
        return view('web.qualitative_data_analysis');
    }
    public function quantitativeDataAnalysis()
    {
        return view('web.quantitative_data_analysis');
    }
    public function reviewSupport()
    {
        return view('web.review_support');
    }
    public function journalReviewSupport()
    {
        return view('web.journal_review_support');
    }
    public function thesisReviewSupport()
    {
        return view('web.thesis_review_support');
    }
    public function vivaVoce()
    {
        return view('web.viva_voce');
    }
    public function presentation()
    {
        return view('web.presentation');
    }
    public function proofreading()
    {
        return view('web.proofreading');
    }
    public function ContactUs()
    {
        return view('web.contact-us');
    }
    public function Page()
    {
        return view('web.404_page');
    }
}
