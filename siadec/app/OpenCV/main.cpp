#include <opencv2/core/core.hpp>
#include <opencv2/highgui/highgui.hpp>
#include <iostream>

using namespace cv;
using namespace std;

int main( int argc, char** argv )
{
    if( argc != 4)
    {
     cout <<" Usage: display_image ImageToLoadAndDisplay" << endl;
     return -1;
    }

    Mat image1;
    Mat image2;
    Mat image3;
    image1 = imread(argv[1], IMREAD_COLOR);
    image2 = imread(argv[2], IMREAD_COLOR);
    image3 = imread(argv[3], IMREAD_COLOR);   // Read the file

    cout <<  argv[1] << std::endl;
    cout <<  argv[2] << std::endl;
    cout <<  argv[3] << std::endl;

    if(! image3.data )                              // Check for invalid input
    {
        cout <<  "Could not open or find the image" << std::endl ;
        return -1;
    }

    namedWindow( "Display window", WINDOW_AUTOSIZE );// Create a window for display.
    imshow( "Display window", image1 );                   // Show our image inside it.

    namedWindow( "Display window2", WINDOW_AUTOSIZE );// Create a window for display.
    imshow( "Display window2", image2 );   

    namedWindow( "Display window3", WINDOW_AUTOSIZE );// Create a window for display.
    imshow( "Display window3", image3 );   

    cout <<  "Nice!!" << std::endl ;
                                       
    return 0;

}