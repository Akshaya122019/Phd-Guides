<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\WebsiteController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class,'Home'])->name('home');
Route::get('/selection_of_topics', [WebsiteController::class,'selectionTopics'])->name('selection_of_topics');
Route::get('/research_proposal_writing', [WebsiteController::class,'researchProposalWriting'])->name('research_proposal_writing');
Route::get('/research_paper_writing', [WebsiteController::class,'researchPaperWriting'])->name('research_paper_writing');
Route::get('/synopsis_writing', [WebsiteController::class,'synopsisWriting'])->name('synopsis_writing');
Route::get('/dissertation', [WebsiteController::class,'dissertation'])->name('dissertation');
Route::get('/thesis_writing', [WebsiteController::class,'thesisWriting'])->name('thesis_writing');
Route::get('/formatting_service', [WebsiteController::class,'formattingService'])->name('formatting_service');
Route::get('/synopsis_formatting', [WebsiteController::class,'synopsisFormatting'])->name('synopsis_formatting');
Route::get('/thesis_formatting', [WebsiteController::class,'thesisFormatting'])->name('thesis_formatting');
Route::get('/dissertation_formatting', [WebsiteController::class,'dissertationFormatting'])->name('dissertation_formatting');
Route::get('/implementation', [WebsiteController::class,'implementation'])->name('implementation');
Route::get('/literature_review', [WebsiteController::class,'literatureReview'])->name('literature_review');
Route::get('/systematic_literature_review', [WebsiteController::class,'systematicLiteratureReview'])->name('systematic_literature_review');
Route::get('/research_methodology', [WebsiteController::class,'researchMethodology'])->name('research_methodology');
Route::get('/sampling', [WebsiteController::class,'sampling'])->name('sampling');
Route::get('/qualitative_methodology', [WebsiteController::class,'qualitativeMethodology'])->name('qualitative_methodology');
Route::get('/quantitative_methodology', [WebsiteController::class,'quantitativeMethodology'])->name('quantitative_methodology');
Route::get('/data_collection', [WebsiteController::class,'dataCollection'])->name('data_collection');
Route::get('/primary_data_collection', [WebsiteController::class,'primaryDataCollection'])->name('primary_data_collection');
Route::get('/secondary_data_collection', [WebsiteController::class,'secondaryDataCollection'])->name('secondary_data_collection');
Route::get('/assistance', [WebsiteController::class,'assistance'])->name('assistance');
Route::get('/sci_journal', [WebsiteController::class,'sciJournal'])->name('sci_journal');
Route::get('/scopus_indexed', [WebsiteController::class,'scopusIndexed'])->name('scopus_indexed');
Route::get('/q1_journal', [WebsiteController::class,'q1Journal'])->name('q1_journal');
Route::get('/ugc_journal', [WebsiteController::class,'ugcJournal'])->name('ugc_journal');
Route::get('/web_of_science', [WebsiteController::class,'webOfScience'])->name('web_of_science');
Route::get('/isi_journal', [WebsiteController::class,'isiJournal'])->name('isi_journal');
Route::get('/igi_journal', [WebsiteController::class,'igiJournal'])->name('igi_journal');
Route::get('/annotated_bibilography', [WebsiteController::class,'AnnotatedBibilography'])->name('annotated_bibilography');
Route::get('/plagarism_removal', [WebsiteController::class,'plagarismRemoval'])->name('plagarism_removal');
Route::get('/data_analysis', [WebsiteController::class,'dataAnalysis'])->name('data_analysis');
Route::get('/qualitative_data_analysis', [WebsiteController::class,'qualitativeDataAnalysis'])->name('qualitative_data_analysis');
Route::get('/quantitative_data_analysis', [WebsiteController::class,'quantitativeDataAnalysis'])->name('quantitative_data_analysis');
Route::get('/quantitative_data_analysis', [WebsiteController::class,'quantitativeDataAnalysis'])->name('quantitative_data_analysis');
Route::get('/review_support', [WebsiteController::class,'reviewSupport'])->name('review_support');
Route::get('/journal_review_support', [WebsiteController::class,'journalReviewSupport'])->name('journal_review_support');
Route::get('/thesis_review_support', [WebsiteController::class,'thesisReviewSupport'])->name('thesis_review_support');
Route::get('/viva_voce', [WebsiteController::class,'vivaVoce'])->name('viva_voce');